<?php
 try {
    $user ='root';
    $pass ='';
    $conn = new PDO('mysql:host=localhost;dbname=bibliotheque', $user, $pass);
} 

catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $lien = $_GET['id'];
    $requete = "UPDATE catalogue SET Etat='Disponible'WHERE id='$lien'";
    $stmt = $conn->prepare($requete);
    $stmt->execute();
    echo 'Le livre est désormais disponible';
}
      
catch(PDOException $e){
    echo 'Erreur : ' . $e->getMessage();
}

?>