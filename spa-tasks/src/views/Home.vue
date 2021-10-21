<template>
  <div class="about">
    <h1>To Do List</h1>
    <form @submit.prevent="add( )">
      <div class="container-sm w-25">
        <div class="row">
          <div class="col-8">
      <input type="text" class="form-control" placeholder="Add Task" v-model="task" required>
      </div>
      <div class="col-4">
      <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </div>
      </div>
    </form>
    <div class="container p-3 w-25">
    <ul class="list-group">
      
        
      <li v-for="(task,index) in tasks" :key="index" class="list-group-item" >
        <div class="row text-start">
          <div class="col-6 p-2">
        <input v-if="task.done==1" type="checkbox" name="check" v-on:click="updateDone(task.id_task, task.done)" checked>
        <input v-else type="checkbox" name="check"  v-on:click="updateDone(task.id_task, task.done)">
        {{task.detail}}
        </div>
        <div class="col-6">
        <router-link :to='{name:"editTask",params:{id:task.id_task}}' class="btn btn-success">Edit</router-link>
        <a type="button" v-on:click="deleteTask(task.id_task)" class="btn btn-danger">Delete</a>
        </div>
      </div>
      </li>
    </ul>
    </div>
  </div>
</template>

<script>

import axios from 'axios';
axios.defaults.headers.common.Accept = 'application/json';
export default {
  name: 'Tasks',
  data (){
    return {
      tasks: [],
      task: null,
    }
  },
  created(){
    this.initialize()
  },
  methods:{
    async initialize(){
        let response = await axios.get('//localhost:80/ensolvers/todolist/api/tasks');
        this.tasks = response.data;
    },
      add(){
        const tarea={
          'detail': this.task
        }
        fetch('//localhost:80/ensolvers/todolist/api/tasks',{
            method: 'POST',
            headers: {'Content-Type': 'application/json'}, 
            body: JSON.stringify(tarea) 
        })
        .then(()=>this.initialize())
        
        .catch(error => console.log(error));

      },
      deleteTask(id){
        fetch('//localhost:80/ensolvers/todolist/api/tasks/'+id,{
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'}, 
        })
        .then(()=>this.initialize())
        
        .catch(error => console.log(error));
      },
      async updateDone(id,don){
        if(don==0){
          let data = {
            done: 1
          }
          let response = await axios.put('//localhost:80/ensolvers/todolist/api/tasks/'+id, data);
          console.log(response);
        }else{
          let data = {
            done: 0
          }
          let response = await axios.put('//localhost:80/ensolvers/todolist/api/tasks/'+id, data);
          console.log(response);
        }
        
        }
        
      
  }
 
}
</script>




