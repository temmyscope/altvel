<?php

/**
* @var \Seven\Vars\Router $router
|
|-----------------------------------------------------------------------
| Application Routes
|-----------------------------------------------------------------------
| Here is where you can register all of the routes for your application.
*/

$router->get('/', [ HomeController::class, "index" ]);

$router->get('search/:query', [ SearchController::class, 'index' ]);

$router->use('web-auth', function () use ($router) {

    $router->get('home', [ HomeController::class, 'all']);

    $router->get('logout', [ AuthController::class, 'logout']);
});

/**
|
|-----------------------------------------------------------------------
| Example Api Routes Definition
|-----------------------------------------------------------------------
|
*/

$router->use('api-auth;prefix:api;', function () use ($router) {

    $router->get('home', [ HomeController::class, 'all' ]);

    $router->get('logout', [ AuthController::class, 'logout' ]);

});
