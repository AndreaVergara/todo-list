<?php
require_once("./Model/TaskModel.php");
require_once("./api/ApiController.php");
require_once("./api/JSONView.php");

class TasksApiController extends ApiController{
  
    public function getTasks($params = null) {
        $tasks = $this->model->getTasks();
        $this->view->response($tasks, 200);
    }

    
    public function getTask($params = null) {
       
        $id = $params[':ID'];
        
        $tarea = $this->model->getTask($id);
        
        if ($tarea) {
            $this->view->response($tarea, 200);   
        } else {
            $this->view->response("No existe la tarea con el id={$id}", 404);
        }
    }

  
    public function deleteTask($params = []) {
        $task_id = $params[':ID'];
        $task = $this->model->getTask($task_id);

        if ($task) {
            $this->model->deleteTaskFromDB($task_id);
            $this->view->response("Tarea id=$task_id eliminada con éxito", 200);
        }
        else 
            $this->view->response("Task id=$task_id not found", 404);
    }

    
   public function addTask($params = []) {     
        $task = $this->getData(); 
        
       $tareaId = $this->model->insertTask($task->detail);
       
       $newTask = $this->model->getTask($tareaId);
       
        
        if ($newTask)
             $this->view->response($newTask, 200);
        else
             $this->view->response("Error al insertar tarea", 500);

    }

    
    public function updateTask($params = []) {
        $task_id = $params[':ID'];
        $task = $this->model->getTask($task_id);

        if ($task) {
            $body = $this->getData();
            if(!empty($body->detail)){
                $detail = $body->detail;
                $task = $this->model->updateTaskFromDB($task_id, $detail);
                $this->view->response("Tarea id=$task_id actualizada con éxito", 200);
            }
            else{
                $done = $body->done;
                $task = $this->model->updateDone($task_id, $done);
                $this->view->response("Tarea id=$task_id actualizada con éxito", 200);
            }
            
        }
        else 
            $this->view->response("Task id=$task_id not found", 404);
    }


}