<?php

include_once "db.php";

$table = "counter";
   
$db-> exec("CREATE TABLE IF NOT EXISTS $table(
    id INTEGER PRIMARY KEY, 
    wert TEXT NOT NULL
    )");

$db->exec("INSERT INTO counter (id, wert)
VALUES (1, 0)
ON CONFLICT (ID) DO
UPDATE SET wert = wert + 1");
?>