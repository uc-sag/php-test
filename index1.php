<?php
 require_once('C:\smarty-4.3.1\libs/Smarty.class.php');
 $smarty = new Smarty();
$smarty->assign('check',array(
         1=>"abc",
         2=>"def",
         3=>"ghi"
));
$smarty->assign('check2',array(1,2,3,4,5));
$smarty->assign('name',array('abc','def','ghi'));

$smarty->assign('id',1);
$smarty->assign('sel',1);

$smarty->display('first.tpl');

?>