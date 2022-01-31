<!DOCTYPE html>
<html>
    <body>
        <?php
            $empf = "themiddnightarmy@gmail.com";
            $betreff = $_POST ['betreff'];
            $from = "From: ";
            $from .= $_POST["von"];
            $from .= " <";
            $from .= $_POST['mail'];
            $from .= ">\n";
            $from .= "Reply-To: ";
            $from .= $_POST['mail'];
            $from .= "\n";
            $from .= "Content-Type: text/html\n";
            $text = $_POST['Warum sollen wir dich nehmen?'];

            mail ($empf, $betreff, $text, $from);
            echo "Vielen Dank";
        ?>
    <body>
<html>