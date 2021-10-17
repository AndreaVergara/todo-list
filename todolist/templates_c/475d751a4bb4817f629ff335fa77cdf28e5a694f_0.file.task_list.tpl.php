<?php
/* Smarty version 3.1.39, created on 2021-10-17 03:28:47
  from 'C:\xampp\htdocs\ensolver\todolist\templates\vue\task_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616b7c4fbf2830_40715307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '475d751a4bb4817f629ff335fa77cdf28e5a694f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ensolver\\todolist\\templates\\vue\\task_list.tpl',
      1 => 1634434124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616b7c4fbf2830_40715307 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php }
}
