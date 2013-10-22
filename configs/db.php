<?php
require_once 'DB.php';
$user='root';
$pass='940217';
$host='localhost';
$db_name='phodal';

$dsn = "mysql://$user:$pass@$host/$db_name";
$db=DB::connect($dsn);

if(DB::isError($db)){
	die($db->getMessage());
}

$db->disconnect();
?>