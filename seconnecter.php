
   <?php
   include "header.php";
   ?>
    <div class="connectionform">
        <div>
            <img src="./assets/mangaworld.jpg" style="width:100% ; height:100%;"/>
        </div>
        <div class="forminput">
        <form action="db_connexion.php" method="post">
            Adresse E-Mail: <input type="text" name="mail"><br>
            Mot de Passe: <input type="password" name="mdp"><br>
            <input type="submit" value="Connexion">
            <div class="lienenrengistrement">
             <a href="senrengistrer.php">Pas encore de compte ?! Inscrivez vous.</a>
            </div>
        </form>
        </div>   
    </div>
    <?php
       include "footer.php";
    ?>