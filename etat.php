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
    $requete = "SELECT Nom, Etat FROM catalogue WHERE id='$lien'";
    // echo $requete;
    $stmt = $conn->prepare($requete);
    $stmt->execute();
   }
      
catch(PDOException $e){
    echo 'Erreur : ' . $e->getMessage();
}

$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo $result["Nom"];
print " est : ";
echo $result["Etat"];