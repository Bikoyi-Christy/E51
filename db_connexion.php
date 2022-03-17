<?php

$mail = $_POST["mail"];
$mdp = sha1($_POST["mdp"]);

$dsn = 'mysql:dbname=bibliotheque;host=localhost';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);

$sql = "SELECT * FROM `user` WHERE `mail` = :mail";
$query = $dbh->prepare($sql);
$query->bindParam(":mail", $mail, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_OBJ);

    if ($mdp===$result->mdp){
        session_start();
        $_SESSION["mail"] = $mail;
        echo "Bienvenu ".$mail;
    }else {
        echo "Votre compte n'existe pas";
    };
echo "<br><a href='index.php'>Retour</a>";
?>
