<?php
/* Smarty version 4.3.1, created on 2023-08-02 12:57:34
  from 'C:\XAMPP\htdocs\PHP-test\templates\first.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ca369e482ad0_01545472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '099cd3badd72c6559652bb51a58c1ac3334ca90f' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP-test\\templates\\first.tpl',
      1 => 1690973853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ca369e482ad0_01545472 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<body>
<?php
$_smarty_tpl->tpl_vars['start'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['start']->step = 1;$_smarty_tpl->tpl_vars['start']->total = (int) ceil(($_smarty_tpl->tpl_vars['start']->step > 0 ? $_smarty_tpl->tpl_vars['len']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['len']->value-1)+1)/abs($_smarty_tpl->tpl_vars['start']->step));
if ($_smarty_tpl->tpl_vars['start']->total > 0) {
for ($_smarty_tpl->tpl_vars['start']->value = 0, $_smarty_tpl->tpl_vars['start']->iteration = 1;$_smarty_tpl->tpl_vars['start']->iteration <= $_smarty_tpl->tpl_vars['start']->total;$_smarty_tpl->tpl_vars['start']->value += $_smarty_tpl->tpl_vars['start']->step, $_smarty_tpl->tpl_vars['start']->iteration++) {
$_smarty_tpl->tpl_vars['start']->first = $_smarty_tpl->tpl_vars['start']->iteration === 1;$_smarty_tpl->tpl_vars['start']->last = $_smarty_tpl->tpl_vars['start']->iteration === $_smarty_tpl->tpl_vars['start']->total;?>
    <?php $_smarty_tpl->_assignInScope('curr', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['start']->value]);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['curr']->value, 'foo');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
      <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
?>

  
</body>
</html>
<?php }
}
