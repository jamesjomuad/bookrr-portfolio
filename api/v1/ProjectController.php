<?php namespace Bookrr\Portfolio\Api\v1;

use BackendMenu;
use Backend\Classes\Controller;
use Bookrr\Portfolio\Models\Project;

/**
 * Test Controller Back-end Controller
 */
class ProjectController extends Controller
{

    private $per_page = 6;

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Bookrr.Portfolio', 'portfolio', 'testcontroller');
    }

    public function index()
    {
        $projects = Project::with('images')
        ->orderBy('id','desc');

        return $projects->paginate($this->per_page);
    }

    public function show($id)
    {
        return Project::with('images')->find($id);
    }

}