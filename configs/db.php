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


$sql="select nav from header";
mysql_query("set names utf8;");

$result=$db->query($sql);
$i=0;

while ($row = $result->fetchRow()) {
    $zero[$i]=$row[0];
    $i=$i+1;
}
/*
var_dump($zero);
while($element=each($zero)){
	echo $element['value'];
}*/
$db->disconnect();

