<?php
$db = new PDO("mysql:host=localhost;dbname=bibliotheque", "root","");

$db->exec("SET CHARACTER SET utf8");
if(isset($_POST["validator"])){
$mail = $_POST["mail"];
$mdp = $_POST["mdp"];
$mdp2 = $_POST["mdp2"];

if(isset($_POST['mdp']) AND !empty($_POST['mdp']) AND isset($_POST['mdp2']) AND !empty($_POST['mdp2']))
{
$mdp = sha1($_POST['mdp']);
$mdp2 = sha1($_POST['mdp2']);

if($mdp == $mdp2)
{
$insertmdp = $db->prepare("INSERT INTO `user` (`mail`, `mdp`) VALUES ('$mail','$mdp'); ");
$insertmdp->execute();
echo "Inscription validé veuillez vous connecter <a href='seconnecter.php'>Ici</a>";
}
else
{
$msg = "Vos mots de passe ne correspondent pas !";
}
}


echo "<br><a href='index.php'>Retour</a>";
}
?>