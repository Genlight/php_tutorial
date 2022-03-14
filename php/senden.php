<!DOCTYPE html>
<html>
    <body>
        <?php
        if(isset($_POST["Anmeldung"])){
            mail("johannes.erlbeck@gmail.com", "Anmeldungsformular", "Discord Name: ".$_POST["discord name"]. 'Email Adresse: '.$_POST["email"].'Auswahlmöglichkeiten: '.$_POST["auswahlmöglichkeiten"]. 'Text: '.$_POST["text"]);
        }
        ?>
    </body>
</html>