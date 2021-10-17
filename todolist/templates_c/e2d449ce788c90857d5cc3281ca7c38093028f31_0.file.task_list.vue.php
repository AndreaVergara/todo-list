<?php
/* Smarty version 3.1.39, created on 2021-10-16 13:19:19
  from 'C:\xampp\htdocs\ensolver\todolist\templates\vue\task_list.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616ab53718c223_81859482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2d449ce788c90857d5cc3281ca7c38093028f31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ensolver\\todolist\\templates\\vue\\task_list.vue',
      1 => 1634383140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616ab53718c223_81859482 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <section id="template-vue-tasks">
    
        <div v-if="loading">
            
                Cargando...

        </div>

        <ul v-if="!loading">
           <li v-for="task in tasks">
                <input type="checkbox" name="detail" id="check">
                {{task.detail}}
                <a href="#">Editar</a>
                <a :data-id ="tasks.id" href="#">Delete</a>
           </li> 
        </ul>
    
    </section>
<?php }
}
