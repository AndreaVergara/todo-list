<?php

class TaskModel{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=to_do_list;charset=utf8', 'root', '');
    }

    
    function getTasks(){
        $query = $this->db->prepare( "SELECT * FROM task");
        $query->execute();
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);
    
       return $tasks;
    }

    function insertTask($detail){
        $query = $this->db->prepare("INSERT INTO task(detail) VALUES(?)");
        $query->execute(array($detail));

        return $this->db->lastInsertId();
    }

    function deleteTaskFromDB($id){
        $query =  $this->db->prepare("DELETE FROM task WHERE id_task = ?");
        $query ->execute(array($id));

        return $this->db->lastInsertId();
    }

    function updateTaskFromDB($id,$detail){
        $query = $this->db->prepare("UPDATE task SET detail = ? WHERE id_task = ?");
        $query ->execute(array($detail,$id));
    }

    function updateDone($id,$done){
        $query = $this->db->prepare("UPDATE task SET done = ? WHERE id_task = ?");
        $query ->execute(array($done,$id));
    }

    function getTask($id){
        $query = $this->db->prepare( "SELECT * FROM task WHERE id_task = ?");
        $query->execute(array($id));
        $task = $query->fetch(PDO::FETCH_OBJ);
        return $task;
    }


}
?>