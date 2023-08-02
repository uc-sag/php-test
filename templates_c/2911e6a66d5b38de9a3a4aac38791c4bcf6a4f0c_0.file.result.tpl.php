<?php
/* Smarty version 4.3.1, created on 2023-08-02 12:29:23
  from 'C:\XAMPP\htdocs\PHP-test\templates\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ca3003b9fa28_76705866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2911e6a66d5b38de9a3a4aac38791c4bcf6a4f0c' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP-test\\templates\\result.tpl',
      1 => 1690972160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ca3003b9fa28_76705866 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<body>

<h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>

<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
<p><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
 X <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 = <?php echo $_smarty_tpl->tpl_vars['no']->value*$_smarty_tpl->tpl_vars['i']->value;?>
</p>
<?php }
}
?>
</body>
</html>
<?php }
}
