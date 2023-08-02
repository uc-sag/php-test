<?php
/* Smarty version 4.3.1, created on 2023-08-02 12:08:19
  from 'C:\XAMPP\htdocs\PHP-test\templates\first.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ca2b132ac1e0_65833804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '099cd3badd72c6559652bb51a58c1ac3334ca90f' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP-test\\templates\\first.tpl',
      1 => 1690970897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ca2b132ac1e0_65833804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\smarty-4.3.1\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'C:\\smarty-4.3.1\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>
<html>
<body>
  <?php
$__section_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rows_0_total = $__section_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rows'] = new Smarty_Variable(array());
if ($__section_rows_0_total !== 0) {
for ($__section_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] = 0; $__section_rows_0_iteration <= $__section_rows_0_total; $__section_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']++){
?>
 <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
   <td> <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] : null)];?>
</td>
 </tr>
  <?php
}
}
?>

<br>

  <?php echo smarty_function_counter(array('start'=>0,'skip'=>3),$_smarty_tpl);?>
<br>
  <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>
  <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>
  <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>
  <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>
  <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>
  
</body>
</html>
<?php }
}
