<?php namespace Arredamiento\Alquiler\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Equipo Back-end Controller
 */
class Equipo extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arredamiento.Alquiler', 'alquiler', 'equipo');
    }
}
