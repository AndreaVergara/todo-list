<?php
/* Smarty version 3.1.39, created on 2021-10-15 13:29:05
  from 'C:\xampp\htdocs\ensolver\todolist\templates\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6169660143e4e5_72057498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2827a547a143969745a5bbd92a9c480bde0e58ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ensolver\\todolist\\templates\\taskList.tpl',
      1 => 1634296036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6169660143e4e5_72057498 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <form action="check/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
" method="POST">
                            <?php if ($_smarty_tpl->tpl_vars['task']->value->done == 1) {?>
                                <button><input name="done" type="checkbox" checked></button>
                            <?php } else { ?>
                                <button><input name = "done" type="checkbox" ></button>
                            <?php }?>
                    </form>
                    <?php echo $_smarty_tpl->tpl_vars['task']->value->detail;?>

                    <a href="updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
">Edit</a> 
                    <a href="deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
">Delete</a>
                   
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </ul>

    <h1><?php echo $_smarty_tpl->tpl_vars['titleForm']->value;?>
</h1>
    
    <form id="form-task" action="<?php echo $_smarty_tpl->tpl_vars['actionForm']->value;?>
" method="POST">
        <input type="text" name="detail" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" placeholder="New Task" id="detail">

        <?php ob_start();
echo $_smarty_tpl->tpl_vars['update']->value;
$_prefixVariable1 = ob_get_clean();
if (!$_prefixVariable1) {?>
            <input type="submit" name="Add" value="Add" id="add">
        <?php } else { ?>
            <input type="submit" name="Save" value="Save" >
            <a href="home">Cancel</a>
        <?php }?>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
