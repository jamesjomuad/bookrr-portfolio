<?php


Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('portfolio/projects', 'Bookrr\Portfolio\Api\v1\ProjectController');
});