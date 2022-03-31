<?php
// connexion a la base de donnée
$db = new PDO("mysql:host=localhost;dbname=bibliotheque", "root", "");

$db->exec("SET CHARACTER SET utf8");
if (isset($_POST["validator"])) {
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $mdp2 = $_POST["mdp2"];

    if (isset($_POST['mdp']) and !empty($_POST['mdp']) and isset($_POST['mdp2']) and !empty($_POST['mdp2'])) {
        $mdp = sha1($_POST['mdp']);
        $mdp2 = sha1($_POST['mdp2']);

        if ($mdp == $mdp2) {
            $insertmdp = $db->prepare("INSERT INTO `user` (`mail`, `mdp`) VALUES ('$mail','$mdp'); ");
            $insertmdp->execute();
            echo "Inscription validé veuillez vous connecter <a href='seconnecter.php'>Ici</a>";
        } else {
            echo"Vos mots de passe ne correspondent pas !";
        }
    }


    echo "<br><a href='index.php'>Retour</a>";
}
