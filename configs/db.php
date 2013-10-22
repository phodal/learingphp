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
while ($row = $result->fetchRow()) {
    echo "<h1> $row[0] </h1>";
}

$db->disconnect();

