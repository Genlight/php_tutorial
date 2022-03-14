<!DOCTYPE html>
<html>
    <body>
        <?php
            mail("johannes.erlbeck@gmail.com", "Anmeldungsformular", "Discord Name: ".$_POST["uname"]. '| Email Adresse: '.$_POST["email"]. '| Text: '.$_POST["comment"])
        ?>
    </body>
</html>