<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biliothèquev2</title>
    <link rel="style" href="style.css">
    <link rel="stylesheet" href="forme.css">
    <script type="text/javascript"  src="ouvrirfenetre.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kameron&display=swap" rel="stylesheet">
    <?php 
    session_start();
    $isLoggedIn = false;
    if(isset($_SESSION["mail"])){
        $mail=$_SESSION["mail"];
        echo "Bienvenu ".$mail;
        $isLoggedIn = true;
    } 
?>
</head>
<body>
<ul>
        <li><a href="index.html">Home</a></li>
        <?php if($isLoggedIn){ ?><li><a href="catalogue.php">Catalogue</a></li><?php } ?>
        <li><a href="senrengistrer.php">S'inscrire</a></li>
        <li><a href="seconnecter.php">Se connecter</a></li>
        <li><a href=""></a>Panier</li>
    </ul>