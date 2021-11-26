<?php namespace Jakub\Todolist;

use Backend;
use System\Classes\PluginBase;

/**
 * Todolist Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Todolist',
            'description' => 'No description provided yet...',
            'author'      => 'Jakub',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Jakub\Todolist\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'jakub.todolist.some_permission' => [
                'tab' => 'Todolist',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        //return []; // Remove this line to activate

        return [
            'todolist' => [
                'label'       => 'Todolist',
                'url'         => Backend::url('jakub/todolist/tasks'),
                'icon'        => 'icon-leaf',
                'permissions' => ['jakub.todolist.*'],
                'order'       => 500,
            ],
        ];
    }
}
