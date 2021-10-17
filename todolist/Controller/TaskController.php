<?php

require_once "./Model/TaskModel.php";
require_once "./View/TaskView.php";


class TaskController{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }

    function showHome(){
        $tasks = $this->model->getTasks();
        $this->view->showTasks($tasks);
    }

    function updateTask($id){
        $this->view->showEdit($id); 
       
    }
    
}