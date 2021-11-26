<?php namespace Jakub\Todolist\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Jakub\Todolist\Models\Task;

/**
 * Tasks Back-end Controller
 */
class Tasks extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController'
    ];

    /**
     * @var string Configuration file for the `FormController` behavior.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Jakub.Todolist', 'todolist', 'tasks');
    }
    
     public function apiIndex(){
        return Task::all();
    }
    public function destroy($id){
    $task = Task::findOrFail($id);
    $task->delete();
    return response('Vymazane', 200);
    }
    public function show($id){
        return Task::findOrFail($id);
    }
    public function store(){
        $data = input();
        return Task::create($data);
    }
    public function callAction($method, $parameters = false)
        {
        $action = 'api'.ucfirst($method);
        if (method_exists($this, $action) && is_callable(array($this, $action))) {
            return call_user_func_array(array($this, $action), $parameters);
        } else {
            return parent::callAction($method, array_values($parameters));
        }
    }
}

   