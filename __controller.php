<?php
	
	
	
	include_once "__database.php";
	/*$db->insert("user_inf", array("email" => "1@2.ru".rand(5, 10000), "login" => "beauty".rand(5, 10000), "pass" => "123456"));
	$res = $db->select("user_inf");*/
	//print_r($db->result);
	//$db->query("select * from user_inf where pass=123456");

	$c = array(mt_rand(5, 15), mt_rand(25, 84));
	
	
	
	
	$ajax = (bool)(isset($_POST['ajax']));	
	
	$page = isset($_GET['page']) ? $_GET['page'] : 'index';
	$page = (
		!file_exists($page.'.php') || 
		substr($page, 0, 2) === '__' || 
		(!$ajax && substr($page, 0, 2) === '_!') 
		? '404' 
		: $page
	);
	

	if(!$ajax) require_once '__main.php'; 
	else {
		require_once $page.'.php';
		if (file_exists ($page.'_footer.php')) require_once $page.'_footer.php';
	}

?>