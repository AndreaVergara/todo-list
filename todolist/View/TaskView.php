<?php
require_once 'libs/smarty-master/libs/Smarty.class.php';
class TaskView{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showTasks($tasks){
        $this->smarty->assign('title','To-Do List');
        $this->smarty->assign('titleForm', 'Add task');
        $this->smarty->assign('value','');
        $this->smarty->assign('tasks',$tasks);
        $this->smarty->assign('update', false);
        $this->smarty->assign('actionForm','createTask');
        $this->smarty->display('../templates/todo_list.tpl');

    }

    function showHomeLocation(){
        header("Location:".BASE_URL."home");
    }

    function showEdit($id){
        $this->smarty->assign('id',$id);
        $this->smarty->display('../templates/todo_list.tpl');

    }

}