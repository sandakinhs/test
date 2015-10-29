<?php
include_once "encrypt.php";

$enc = new encrypt1;

$secretKey="rr";
$data = "iphonik:Users:10:Start_Date:2016/10/28:End_Date:2015/11/31:Inquiry:1:Sales:1:Tickets1:1";
// $data =explode('=====', file_get_contents("test.txt"));

// var_dump($data);

$test = $enc->encrypt($data, $secretKey);

echo $test;

// $test1 = $enc->decrypt($data['2'], $secretKey);

// echo '<br>'.$test1;

// $arr = explode(':', $test1);
echo "<br>";
// echo $arr['3'];
// echo "value = ${array[2]}";
// echo DATE('Y/m/d');

// if($arr['4']==DATE('Y/m/d')){
// 	echo "string";
// }



// echo file_get_contents("test.txt");


?>