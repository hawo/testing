<?php

$host = "localhost";
$user = "root";
$pass = "cloud214";

$databaseName ="test";
$tableName = "user";

$db = mysqli_connect("localhost", "root", "cloud214", "test");

$result = mysqli_query($db, "SELECT * FROM $tableName");

$array = array();

while($row = mysqli_fetch_row($result)){
	$array[] = $row;
}

//echo "$array";
echo json_encode($array);

mysqli_close($db);

?>
