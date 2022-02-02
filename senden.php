<!DOCTYPE html>
<html>
    <body>
        <?php
            $empf = "themiddnightarmy@gmail.com";
            $betreff = "Bewerbung von: " . $_POST ['uname'];
            $text = $_POST['uname'] . " - email: " .$_POST ['email'];

            mail ($empf, $betreff, $text);
            echo "Email gesendet";
        ?>
    </body>
</html>