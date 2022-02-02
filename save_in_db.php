<!DOCTYPE html>
<html>
    <body>
        <?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

$dbFile = $_SERVER['DOCUMENT_ROOT']."test.sqlite";

$db = new SQLite3("$dbFile");
$table = "users";
   
$db-> exec("CREATE TABLE IF NOT EXISTS $table(
    id INTEGER PRIMARY KEY AUTOINCREMENT, 
    username TEXT NOT NULL,
    email TEXT
    )");

// $username = $_POST ["uname"];
// $email = $_POST ['email'];
$username = "alex";
$email = 'a.a@gmeil.com';


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