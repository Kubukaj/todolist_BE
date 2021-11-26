<?php namespace Jakub\Blog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Jakub\Blog\Models\Post;
/**
 * Posts Back-end Controller
 */
class Posts extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    /**
     * @var string Configuration file for the `FormController` behavior.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Jakub.Blog', 'blog', 'posts');
    }
    public function apiIndex(){
        return Post::all();
    }
    public function destroy($id){
    $post = Post::findOrFail($id);
    $post->delete();
    return response('Vsetko bezi', 200);
    }
    public function show($id){
        return Post::findOrFail($id);
    }
    public function store(){
        $data = input();
        return Post::create($data);
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
