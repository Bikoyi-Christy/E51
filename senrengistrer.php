<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "db_inscription.php"
    ?>
<form method="post">
    Username: <input type="text" name="mail"><br>
    Password: <input type="password" name="mdp"><br>
    Confirmation mot de passe: <input type="password" name="mdp2"><br>
    <input type="submit" value="S'inscrire" name="validator">
</form>
<?php
    include "footer.php";
?>