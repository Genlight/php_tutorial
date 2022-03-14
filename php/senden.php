<!DOCTYPE html>
<html>
    <body>
        <?php{
            mail("johannes.erlbeck@gmail.com", "Anmeldungsformular", "Discord Name: ".$_POST["discord name"]. ' | Email Adresse: '.$_POST["email"]. '| Text: '.$_POST["text"]);
        }
        ?>
    </body>
</html>