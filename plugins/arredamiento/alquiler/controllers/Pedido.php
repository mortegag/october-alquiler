<?php namespace Arredamiento\Alquiler\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Pedido Back-end Controller
 */
class Pedido extends Controller
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

        BackendMenu::setContext('Arredamiento.Alquiler', 'alquiler', 'pedido');
    }

    public function formExtendFields($form)
    {
        if( $form->getContext() === 'update')
        {
            $team = $form->model;
            $userField = $form->getField('users');
            $userField->value = $team->users->lists('id');
        }
    }

}
