<?php
 try {
    $user ='root';
    $pass ='';
    $conn = new PDO('mysql:host=localhost;dbname=bibliotheque', $user, $pass);
    /*foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;*/
} 

catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $lien = $_GET['id'];
    $requete = "UPDATE catalogue SET Etat='R&eacuteserv&eacute' WHERE id='$lien'";
    $stmt = $conn->prepare($requete);
    $stmt->execute();
    echo 'F&eacutelicitation vous venez de R&eacuteserv&eacute';
    $requete2 = "SELECT Nom, Etat FROM catalogue WHERE id='$lien'";
    $stmt = $conn->prepare($requete2);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $result["Nom"];
    print " est : ";
    echo $result["Etat"];

}
      
catch(PDOException $e){
    echo 'Erreur : ' . $e->getMessage();
}

?>