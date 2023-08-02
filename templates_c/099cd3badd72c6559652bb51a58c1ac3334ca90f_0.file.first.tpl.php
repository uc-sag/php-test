<?php
/* Smarty version 4.3.1, created on 2023-08-02 12:21:31
  from 'C:\XAMPP\htdocs\PHP-test\templates\first.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ca2e2b5373b7_68444010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '099cd3badd72c6559652bb51a58c1ac3334ca90f' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP-test\\templates\\first.tpl',
      1 => 1690971635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ca2e2b5373b7_68444010 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<body>

<form action="result.php" method="post">
  Enter the number <input type="number" name="no">
  <input type="submit">
</form>
<?php echo '<?php'; ?>

   $no = $_POST['no'];
  echo $no;

<?php echo '?>'; ?>

</body>
</html>
<?php }
}
