<!DOCTYPE html>
<html>
    <body>
        <?php

include_once "db.php";

$table = "users";
   
$db-> exec("CREATE TABLE IF NOT EXISTS $table(
    id INTEGER PRIMARY KEY AUTOINCREMENT, 
    username TEXT NOT NULL,
    email TEXT
    )");

$username = $_POST ["uname"];
$email = $_POST ['email'];

$db->exec("INSERT INTO $table (
    username, 
    email) VALUES (
    '$username' ,
    '$email' )");

echo("folgende Werte wurden in die DB eingefügt" );
echo("email: $email | username: $username");

?>     
</body>
</html>