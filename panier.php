<?php
include "header.php";
$db = new PDO("mysql:host=localhost;dbname=bibliotheque", "root", "");
try {
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = "SELECT * FROM `catalogue` WHERE etat='R&eacuteserv&eacute'";
    $stmt = $db->prepare($requete);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    //renvois le tableau d'objet var_dump($result);
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
<?php foreach ($result as $result1) { ?>

    <h3> <?= $result1->nom ?> </h3>
    <img src="<?= $result1->image ?>">
<?php }
?>


<?php
include "footer.php";
?>