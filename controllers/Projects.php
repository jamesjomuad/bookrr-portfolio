<?php namespace Bookrr\Portfolio\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Projects Back-end Controller
 */
class Projects extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    
    public $listConfig = 'config_list.yaml';

    protected $publicActions = ['onTest'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Bookrr.Portfolio', 'portfolio', 'projects');
    }

    public function onTest()
    {
        return '$this';
    }

}
