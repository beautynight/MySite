<?php

$post = $_POST;

//сохраняем проект и запоминаем ID
$data = array(
	'name' 			=> $post['projectname'],
	'admin' 		=> 1,
	'url' 			=> $post['website'],
	'description' 	=> $post['description'],
	'paymenttype' 	=> $post['paymenttype'],
	'start_date'	=> date('Y.m.d', strtotime($post['date']))
);
$project_id = $db->insert("project", $data);
if ($project_id == -1) return 'Ошибка добавления';



// сохраняем планы
$data = array(
	array_fill(0, count($post['percents']), $project_id),
	$post['percents'],
	$post['period'],
	$post['periodtype'],
	$post['minmoney'],
	$post['currency']
);
$fields = array(
	"project_id",
	"percents",
	"period",
	"period_type_id",
	"start_deposit",
	"currency_type_id"
);
$db->multiInsert("project_plans", $fields, $data);

// сохраняем реферальные уровни
$tmp_array = array();
for ($i=0;$i<count($post['ref_percent']);$i++) $tmp_array[]=$i+1;
$data = array(
	array_fill(0, count($post['ref_percent']), $project_id),
	$post['ref_percent'],
	$tmp_array
);
$fields = array(
	"project_id",
	"percents",
	"level"
);
$db->multiInsert("project_referral", $fields, $data);


// сохраняем языки сайта
$data = array(
	array_fill(0, count($post['lang']), $project_id),
	$post['lang']
);
$fields = array(
	"project_id",
	"lang_id"
);
$db->multiInsert("project_lang", $fields, $data);


// сохраняем платёжные системы
$data = array(
	array_fill(0, count($post['payment']), $project_id),
	$post['payment']
);
$fields = array(
	"project_id",
	"payment_id"
);
$db->multiInsert("project_payment", $fields, $data);


$file_name = substr("00000".$project_id, -6);
$screen_data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $post['screen_data']));
$thumb_data  = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $post['thumb_data']));
file_put_contents("screens/{$file_name}.jpg", $screen_data);
file_put_contents("screens/{$file_name}_th.jpg", $thumb_data);






/*$data = substr($_POST['imgBase64'], strpos($_POST['imgBase64'], ",") + 1);
$decodedData = base64_decode($data);
$fp = fopen("____AA.jpg", 'wb');
fwrite($fp, $decodedData);
fclose($fp);
echo "/____AA.jpg";*/


