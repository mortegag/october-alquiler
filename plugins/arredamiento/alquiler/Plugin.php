<?php namespace Arredamiento\Alquiler;

use Backend;
use System\Classes\PluginBase;

/**
 * Alquiler Plugin Information File
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
            'name'        => 'Alquiler',
            'description' => 'No description provided yet...',
            'author'      => 'Arredamiento',
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
        \Backend\Models\User::extend(function($model){
            $model->belongsTo['proyecto'] = ['Arredamiento\Alquiler\Models\proyecto'];
        });
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
            'Arredamiento\Alquiler\Components\MyComponent' => 'myComponent',
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
            'arredamiento.alquiler.some_permission' => [
                'tab' => 'Alquiler',
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
        return []; // Remove this line to activate

        return [
            'alquiler' => [
                'label'       => 'Alquiler',
                'url'         => Backend::url('arredamiento/alquiler/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['arredamiento.alquiler.*'],
                'order'       => 500,
            ],
        ];
    }
}
