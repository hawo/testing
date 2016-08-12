<?php
$db = mysqli_connect("localhost", "root", "cloud214", "test");
if(!$db)
{
     exit("Verbindungsfehler: ".mysqli_connect_error());
}
?>
