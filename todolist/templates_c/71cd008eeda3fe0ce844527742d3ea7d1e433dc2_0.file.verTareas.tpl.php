<?php
/* Smarty version 3.1.39, created on 2021-10-16 21:21:08
  from 'C:\xampp\htdocs\ensolver\todolist\templates\verTareas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616b2624024db9_20853751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71cd008eeda3fe0ce844527742d3ea7d1e433dc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ensolver\\todolist\\templates\\verTareas.tpl',
      1 => 1634411307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:vue/task_list.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616b2624024db9_20853751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php $_smarty_tpl->_subTemplateRender("file:vue/task_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
        <form id="form-task" method="POST">
        <input type="text" name="detail"  placeholder="New Task" id="detail" required>
        <input type="submit" name="Add" value="Add" id="add">
        </form>
    


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
