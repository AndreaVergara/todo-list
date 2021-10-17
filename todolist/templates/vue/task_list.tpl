{literal}
    <section id="template-vue-tasks">
    
        <div v-if="loading">
            
                Cargando...

        </div>

        <ul v-if="!loading">
           <li v-for="task in tasks">
        
           

            <template id="edit" v-if="idEdit == task.id_task" >
                <form action="POST">
                    <input  type="text"  :value="task.detail">
                </form>
            </template>

            <template v-else> 
                <input v-if="task.done==1" type="checkbox" name="check"  v-bind:id="task.id_task" checked>
                <input v-else type="checkbox" name="check"  v-bind:id="task.id_task">
                {{task.detail}}  
                <button v-bind:id="task.id_task" name="btn-edit">Edit</button>
                <button v-bind:id="task.id_task" name="btn-delete">Delete</button>
            </template>  

           </li> 
        </ul>

    </section>
{/literal}