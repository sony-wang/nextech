<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('users', UsersController::class);

    $router->resource('question_category', Question_categorysController::class);
    $router->resource('question', QuestionsController::class);
    $router->resource('class01', Class01sController::class);
    $router->resource('class02', Class02sController::class);
    $router->resource('main', MainsController::class);
});
