<?php
require '../helpers.php';
require basePath('Database.php');
require basePath('Router.php');

//Instantiate router
$router = new Router();

//Get routes
$routes = require basePath('routes.php');

//Get current URI and HTTP method
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

//Route request
$router->route($uri, $method);
