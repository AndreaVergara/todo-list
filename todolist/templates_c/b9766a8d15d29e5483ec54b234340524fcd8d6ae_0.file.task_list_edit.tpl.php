<?php
/* Smarty version 3.1.39, created on 2021-10-16 21:51:45
  from 'C:\xampp\htdocs\ensolver\todolist\templates\task_list_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616b2d518bdab2_64789371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9766a8d15d29e5483ec54b234340524fcd8d6ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ensolver\\todolist\\templates\\task_list_edit.tpl',
      1 => 1634413823,
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
function content_616b2d518bdab2_64789371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php $_smarty_tpl->_subTemplateRender("file:vue/task_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1>Editar <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h1>
        <form id="form-edit" method="POST">
            <input type="text" name="detail"   id="detail" required>
            <input type="submit" name="Add" value="Add" id="add">
        </form>
    


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
