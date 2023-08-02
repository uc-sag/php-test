<?php
 require_once('C:\smarty-4.3.1\libs/Smarty.class.php');
 $smarty = new Smarty();

$our_culture = array(
    array(
        "point_one" => "To be the best in the world.",
    ),
    array(
        "point_two" => "We produce results.",
    ),
    array(
        "point_three" => "We keep our word - We do what we say we will do.",
    ),
    array(
        "point_four" => "Coach, mentor and help the team grow."
    )
    );
$smarty->assign('data',$our_culture);
$smarty->assign('len',count($our_culture));


$smarty->display('first.tpl');

?>