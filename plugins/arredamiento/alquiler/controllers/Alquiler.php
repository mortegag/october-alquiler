<?php namespace Arredamiento\Alquiler\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Alquiler Back-end Controller
 */
class Alquiler extends Controller
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

        BackendMenu::setContext('Arredamiento.Alquiler', 'alquiler', 'alquiler');
    }
}
