<?php
 require_once('C:\smarty-4.3.1\libs/Smarty.class.php');
 $smarty = new Smarty();

 $smarty->assign("test","'Hello this sagar'");
 $smarty->assign("mail",'sagar.gupta@ucertify.com');
$smarty->display('first.tpl');

?>