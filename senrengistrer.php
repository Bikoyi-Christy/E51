
<?php
   include "header.php";
   include "db_inscription.php"
?>
<div class="inscriptionform">
    <form action="db_inscription.php" method="post">
        <label>Adresse E-Mail:</label> <input class="inputinscription" type="text" name="mail"><br>
        <label>Mot de Passe:</label> <input class="inputinscription" type="password" name="mdp"><br>
        <label>Confirmation mot de passe:</label> <input  class="inputinscription"  type="password" name="mdp2"><br>
        <input type="submit" value="S'inscrire" name="validator">
    </form>
</div>
<?php
    include "footer.php";
?>