 <?php
    include "header.php";
    include "db_inscription.php";
 ?>
<form method="post">
    Username: <input type="text" name="mail"><br>
    Password: <input type="password" name="mdp"><br>
    Confirmation mot de passe: <input type="password" name="mdp2"><br>
    <input type="submit" value="S'inscrire" name="validator">
</form>
<?php
    include "footer.php";
?>