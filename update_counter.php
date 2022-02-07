<?php

$dbFile = $_SERVER['DOCUMENT_ROOT']."test.sqlite";

$db = new SQLite3("$dbFile");
$table = "counter";
   
$db-> exec("UPDATE counter set wert = wert + 1 ");


$db->exec("INSERT INTO $table (
    id, 
    wert) VALUES (
    1 ,
    0 )");
?>