<template>
  <div class="contain">
    <h1>Editing task "{{detail}} "</h1>
    <form @submit.prevent="edit( )">
      <div class="container w-25">
        <div class="row">
          <div class="col-8">
      <input type="text" class="form-control"  v-model="task.detail" :placeholder="task.detail" required>
      </div>
      <div class="col-4">
        <div class="row">
          <div class="col-6">
      <button type="submit" class="btn btn-success">Save</button>
      </div>
      <div class="col-6">
       <router-link class="btn btn-danger" :to='{name:"Home"}'>Cancel</router-link>
       </div>
       </div>
        </div>
      </div>
      </div>
    </form>
  </div>
</template>

<script>

import axios from 'axios';
axios.defaults.headers.common.Accept = 'application/json';
export default {
  name: 'edit-task',
  data (){
    return {
      task: {
        detail:"",
        done:""
      },
      detail: ""
      
    }
  },
  created(){
    this.initialize()
  },
  methods:{
    async initialize(){
        await axios.get('//localhost:80/ensolvers/todolist/api/tasks/'+this.$route.params.id)
        .then(response=>{
          console.log(response);
          const{detail,done}=response.data
          this.task.done=done,
          this.task.detail=detail
          this.detail=detail
        })
        
    },

    async edit(){
      await axios.put('//localhost:80/ensolvers/todolist/api/tasks/'+this.$route.params.id, this.task)
      .then(response=>{
        console.log(response);
        window.location.href='../'
        
      })
    }
  }
}
</script>
