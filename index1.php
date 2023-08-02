<?php
 require_once('C:\smarty-4.3.1\libs/Smarty.class.php');
 $smarty = new Smarty();
 $data = array(1,2,3,4,5,6,"xyz","abc",8,9,10);
$smarty->assign("data",$data);
$smarty->display('first.tpl');

?>