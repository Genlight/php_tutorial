<?php 
include_once "db.php";
$counter = $db->exec("SELECT * FROM counter WHERE counter.id = 1;");

echo "$counter";

$db->exec("UPDATE counter set wert = wert + 1 where counter.id = 1;");


$counter = $db->querySingle("SELECT Counter.wert FROM counter WHERE counter.id = 1;");
$counter = str_replace("1", "", $counter);
echo "$counter";

?>