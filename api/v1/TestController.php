<?php namespace Bookrr\Portfolio\Api\v1;

use BackendMenu;
use Backend\Classes\Controller;
use Bookrr\Portfolio\Models\Project;

/**
 * Test Controller Back-end Controller
 */
class TestController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Bookrr.Portfolio', 'portfolio', 'testcontroller');
    }

    public function index()
    {
        return response()->json([
            'message' => 'Not Found',
        ], 404);
    }

    public function show()
    {
        return response()->json([
            'message' => 'Not Found',
        ], 404);
    }

}
