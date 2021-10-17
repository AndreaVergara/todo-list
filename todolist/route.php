<?php
  
   require_once "Controller/TaskController.php";
  
    $action = $_GET['action'];
    define('BASE_URL', 'http://'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    define('BASE_TASKS', 'http://'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/tasks');
    define('UPDATE_TASKS', 'http://'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/updateTask');
    $taskController = new TaskController();
    
    if($action == ''){
        $taskController->showHome();
    }else {
       if(isset($action)){
            $params = explode('/',$action);
            if($params[0] == "tasks"){
                $taskController -> showHome();
            }
       }
    }

    
   

    

    
    