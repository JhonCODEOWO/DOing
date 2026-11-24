<?php

use Controllers\AuthController;
use Controllers\UserController;
use Core\JustArray\JustArray;
use Core\Validator;
use Models\User;
use Routes\Request;
use Routes\Router;

require_once __DIR__ . '/../includes/app.php';

$router = new Router();

//Registering routes.
$router->get('/', function(Request $request) {
    view('index', []);
});

//Auth paths
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'loginIn']);
$router->post('/logout', [AuthController::class, 'logout']);

//User management
$router->get("/account/create", [UserController::class, 'create']);
$router->post("/account/create", [UserController::class, 'store']);
$router->post("/account/delete/{id}", [UserController::class, 'delete']);

//Paths to render information
$router->get("account/confirm", [UserController::class, 'confirm']);
$router->get("account/accountConfirmed", [UserController::class, 'accountConfirmed']);

//Restore password paths
$router->get('account/restorePassword', [UserController::class, 'restorePassword']);
$router->post('account/restorePassword', [UserController::class, 'requestRestorePassword']);
$router->get('account/resetPassword/{token}', [UserController::class, 'resetPassword']);
$router->post('account/resetPassword/{token}', [UserController::class, 'changePassword']);

/**
 * if you want use a controller instead
 * $router->get(
 *      'route', 
 *      [Controller::class, 'methodToHandleTheAction'],
 *      [Middleware::class, ...](optional)
 * );
 */

//Handling the incoming request.
$router->checkRoutes();