<?php namespace Bookrr\Portfolio\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Awards Back-end Controller
 */
class Awards extends Controller
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

        BackendMenu::setContext('Bookrr.Portfolio', 'portfolio', 'awards');
    }
}
