
<?php

require_once('C:\smarty-4.3.1\libs/Smarty.class.php');
$smarty = new Smarty();



  $no = $_POST['no'];
  $smarty->assign("no",$no);

  if($no %2 ==0){
    $smarty->assign('msg',"This is Even Number");
  }
  else{
    $smarty->assign('msg',"This is Odd Number");
  }

  $smarty->display('result.tpl');

?>
