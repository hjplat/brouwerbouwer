<?php namespace Hjp\Brouwerbouwer\Controllers;

use Backend\Classes\Controller;
use Renatio\DynamicPDF\Classes\PDF; // import facade
use BackendMenu;
use Model;
use Flash;
use Hjp\Brouwerbouwer\Classes\Waterprofiel;

class Recipes extends Controller
{
    public $implement = [           'Backend\Behaviors\ListController',
                                    'Backend\Behaviors\FormController',
                                    'Backend.Behaviors.RelationController'
                                ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';


    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Hjp.Brouwerbouwer', 'main-menu-item');
    
    }
    

}
    


