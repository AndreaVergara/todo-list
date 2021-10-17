"use strict";
document.addEventListener("DOMContentLoaded", function(){
    document.querySelector("#form-task").addEventListener('submit', addTask);

    let app = new Vue({
        el: "#template-vue-tasks",
        data: {
            loading: false,
            idEdit:"-1",
            tasks: [] 
        }
       
    });



    function getTasks() {
        app.loading = true;
        fetch("api/tasks")
            .then(response => response.json())
            .then(tasks => {
               app.tasks = tasks;
               app.loading = false;
            })
            .then(()=>fillButtons())
            .then(()=>fillCheck())
            .then(()=>fillButtonsEdits())
            .catch(error => console.log(error));

    }

    function addTask(e){
        e.preventDefault();
        app.loading=true;
        let data = {
            detail: document.querySelector("#detail").value
        }

        fetch('api/tasks',{
            method: 'POST',
            headers: {'Content-Type': 'application/json'}, 
            body: JSON.stringify(data) 
        })
        .then(response => {
            getTasks();
        })
        .catch(error => console.log(error));
    }

    function fillButtons(){
        let deleteButtons = document.getElementsByName('btn-delete');
        for(let i = 0; i<deleteButtons.length; i++){
            deleteButtons[i].addEventListener("click", deleteTask);
        }
    }

    function fillButtonsEdits(){
        let editButtons = document.getElementsByName('btn-edit');
        for(let i = 0; i<editButtons.length; i++){
            editButtons[i].addEventListener("click", function(){
                showEdit(editButtons[i].id);
            });
        }
    }

    function fillCheck(){
        let checks = document.getElementsByName('check');
        for(let i = 0; i<checks.length; i++){
            checks[i].addEventListener("click",function(){
                if(checks[i].checked==true){
                    console.log("entro al true");
                    doneTask(checks[i].id,1);
                }else{
                    console.log("entro al false");
                    doneTask(checks[i].id,0);
                }
                
            });
            
        }
    }

   function showEdit(id){
        app.idEdit = id;
        getTasks();
    }


    function deleteTask(e){
        let task_id=e.currentTarget.id;

        fetch('api/tasks/'+task_id,{
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'},
        })
        .then(response =>response.json())
        .then(()=>{
            getTasks()
        })
        .catch(error => console.log(error));

    }

    function doneTask(id,don){
        let task_id = id;
       console.log(task_id);
        let data = {
            done: don
        }
        
        fetch(`api/tasks/${task_id}`,{
            method:'PUT',
            headers: {'Content-Type': 'application/json'},
            'body': JSON.stringify(data)
        })
        .then(()=>{
            getTasks()
        })
    }

    
   getTasks();


});
