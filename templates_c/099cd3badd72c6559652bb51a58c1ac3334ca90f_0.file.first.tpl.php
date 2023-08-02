<?php
/* Smarty version 4.3.1, created on 2023-08-02 11:45:41
  from 'C:\XAMPP\htdocs\PHP-test\templates\first.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ca25c5db9ce9_88390941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '099cd3badd72c6559652bb51a58c1ac3334ca90f' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP-test\\templates\\first.tpl',
      1 => 1690969538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ca25c5db9ce9_88390941 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<body>
   <?php echo $_smarty_tpl->tpl_vars['test']->value;?>

   <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['test']->value, ENT_QUOTES, 'UTF-8', true);?>

</body>
</html><?php }
}
