<?php

$dbFile = $_SERVER['DOCUMENT_ROOT']."test.sqlite";

$db = new SQLite3("$dbFile");
$table = "counter";
   
$db-> exec("CREATE TABLE IF NOT EXISTS $table(
    id INTEGER PRIMARY KEY, 
    wert TEXT NOT NULL
    )");


$db->exec("INSERT INTO $table (
    id, 
    wert) VALUES (
    1 ,
    0 )");
?>