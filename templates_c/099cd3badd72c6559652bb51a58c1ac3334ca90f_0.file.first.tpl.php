<?php
/* Smarty version 4.3.1, created on 2023-08-02 13:07:30
  from 'C:\XAMPP\htdocs\PHP-test\templates\first.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ca38f2775761_39866488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '099cd3badd72c6559652bb51a58c1ac3334ca90f' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP-test\\templates\\first.tpl',
      1 => 1690974449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ca38f2775761_39866488 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<body>

Contact Details <br/>
FAX: <?php echo $_smarty_tpl->tpl_vars['Contacts']->value['fax'];?>
 <br/>
EMAIL: <?php echo $_smarty_tpl->tpl_vars['Contacts']->value['email'];?>
<br/>
Contacts: HOME-<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['home'];?>
<br/>
Contacts: Cell- <?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['cell'];?>
<br/>


</body>
</html>
<?php }
}
