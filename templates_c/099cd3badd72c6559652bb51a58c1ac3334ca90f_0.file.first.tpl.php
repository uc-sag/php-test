<?php
/* Smarty version 4.3.1, created on 2023-08-02 12:43:41
  from 'C:\XAMPP\htdocs\PHP-test\templates\first.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ca335d186720_16498004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '099cd3badd72c6559652bb51a58c1ac3334ca90f' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP-test\\templates\\first.tpl',
      1 => 1690972946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ca335d186720_16498004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\smarty-4.3.1\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'C:\\smarty-4.3.1\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
?>
<html>
<body>

<?php echo smarty_function_html_checkboxes(array('name'=>"id",'options'=>$_smarty_tpl->tpl_vars['check']->value,'selected'=>$_smarty_tpl->tpl_vars['id']->value,'separator'=>'<br/'),$_smarty_tpl);?>

<?php echo smarty_function_html_radios(array('values'=>$_smarty_tpl->tpl_vars['check2']->value,'output'=>$_smarty_tpl->tpl_vars['name']->value,'selected'=>$_smarty_tpl->tpl_vars['sel']->value,'separator'=>'<br/>'),$_smarty_tpl);?>

</body>
</html>
<?php }
}
