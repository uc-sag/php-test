<?php
 require_once('C:\smarty-4.3.1\libs/Smarty.class.php');
 $smarty = new Smarty();
$smarty->assign("str1",'Hello');
$smarty->display('first.tpl');

?>