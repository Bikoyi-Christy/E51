<?php
$db = new PDO("mysql:host=localhost;dbname=bibliotheque", "root", "");

function getState($nom){
    global $db;
    $sql="SELECT  etat FROM catalogue WHERE nom='$nom'";
    $query=$db->prepare($sql);
    $query->execute();
    $result=$query->fetch(PDO::FETCH_OBJ);
    return $result->etat;
}

?>