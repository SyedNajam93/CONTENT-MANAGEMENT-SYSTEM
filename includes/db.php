<?php ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "syednaja_root";
$db['db_pass'] = "Underdog619*";
$db['db_name'] = "syednaja_cms";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);








?>