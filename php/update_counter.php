<?php

include_once "db.php";

$db->exec("UPDATE counter set wert = wert + 1");

?>