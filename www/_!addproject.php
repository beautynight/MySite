<?php

$db->insert("user_inf", array("email" => "1@2.ru".rand(5, 10000), "login" => "beauty".rand(5, 10000), "pass" => "123456"));

/*$data = substr($_POST['imgBase64'], strpos($_POST['imgBase64'], ",") + 1);
$decodedData = base64_decode($data);
$fp = fopen("____AA.jpg", 'wb');
fwrite($fp, $decodedData);
fclose($fp);
echo "/____AA.jpg";*/


/*


Array
(
    [projectname] => 
    [useremail] => 
    [website] => 
    [description] => 
    [paymenttype] => 
    [percents] => Array
        (
            [0] => 1
            [1] => 
        )

    [afterTime] => Array
        (
            [0] => 11
            [1] => 
        )

    [timetype] => Array
        (
            [0] => 2
            [1] => 3
        )

    [valute] => 1
    [ref_percent] => 
    [lang] => Array
        (
            [0] => en
            [1] => ru
            [2] => zh
            [3] => ak
            [4] => sq
        )

    [verification] => 
    [ajax] => 1
)*/
