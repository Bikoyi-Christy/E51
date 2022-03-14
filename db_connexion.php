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

if ($result)
{
    if ($mdp===$result->mdp){
        $_SESSION["mail"] = $mail;
    echo "Bienvenu ".$mail;
/*     while ($row = $reponse->fetch()) {
        $perso_id = $row[0];
        $perso_nom = $row[2];
    } */
}
}


echo "<br><a href='index.html'>Retour</a>";
?>