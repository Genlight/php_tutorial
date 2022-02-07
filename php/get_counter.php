<?php 
include_once "db.php";


$db->exec("UPDATE counter set wert = wert + 1 where counter.id = 1;");

$counter = $db->querySingle("SELECT counter.wert FROM counter WHERE counter.id = 1;");

// $counter = str_replace("1", "", $counter);

echo "$counter";

?>