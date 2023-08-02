<?php
 require_once('C:\smarty-4.3.1\libs/Smarty.class.php');
 $smarty = new Smarty();
 $smarty->assign('Contacts',
	array('fax' => '555-222-9876',
		'email' => 'megha@ucertify.com',
		'phone' => array('home' => '555-444-3333',
			'cell' => '555-111-1234'
		)
	),
    array('fax' => '555-222-8876',
		'email' => 'pete.gupta@ucertify.com',
		'phone' => array('home' => '555-444-8888',
			'cell' => '555-111-9999'
		)
	)
	
);


$smarty->display('first.tpl');

?>