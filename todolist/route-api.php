<?php
require_once("Router.php");
require_once("./api/TasksApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

$resource = $_GET["resource"];


$method = $_SERVER["REQUEST_METHOD"];


$router = new Router();


$router->addRoute("tasks", "GET", "TasksApiController", "getTasks");
$router->addRoute("tasks/:ID", "GET", "TasksApiController", "getTask");
$router->addRoute("tasks/:ID", "DELETE", "TasksApiController", "deleteTask");
$router->addRoute("tasks", "POST", "TasksApiController", "addTask");
$router->addRoute("tasks/:ID", "PUT", "TasksApiController", "updateTask");


$router->route($resource, $method);