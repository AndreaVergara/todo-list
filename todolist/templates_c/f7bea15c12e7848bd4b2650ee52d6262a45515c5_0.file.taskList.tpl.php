<?php
/* Smarty version 3.1.39, created on 2021-10-14 15:46:19
  from 'C:\xampp\htdocs\to-do-List\templates\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616834ab961e46_78479823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7bea15c12e7848bd4b2650ee52d6262a45515c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\to-do-List\\templates\\taskList.tpl',
      1 => 1634219125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616834ab961e46_78479823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

    <ul >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
            <li>
                    <?php echo $_smarty_tpl->tpl_vars['task']->value->detail;?>

                    <a href="updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
">Editar</a>
                    <a href="deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
">Borrar</a>
                                                    </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </ul>

   
    <form action="createTask" method="POST">
        <input type="text" name="detail" id="detail">
        <input type="submit" name="Add" id="guardar">
        
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
