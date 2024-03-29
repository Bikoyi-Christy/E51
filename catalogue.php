<?php
include "header.php";
include "getState.php";
?>
    <h1>Le catalogue</h1>
    </br>
    <h2>Les classiques</h2>
    <div class=classique>
        <div class=parent>
            <img class="coverManga" SRC="assets/naruto01.jpg" />
            <br />
            <p> Naruto,  rêve de devenir le plus grand de tout les ninjas. </p>
            <!-- Bouton pour acceder a la fonction PHP, et lire la base de donnée, ouverture sur une fenetre distincte grace à la fonction JAVASCRIPT -->
            <a href="etat.php?id=1">
            <INPUT type="submit" value="Voir l'état du Livre"> 
                <!-- onClick="OuvrirFenetre1()"> -->
            </form>
             <!-- connexion avec le fichier PHP afin de d'executer une requette sql et d'envoyer les donées vers le serveur -->
             <a href="emprunter.php?id=1">
                <input class="emprunt" type="submit" value="Emprunté"  <?php if(getState("Naruto")==="R&eacuteserv&eacute" ||getState("Naruto")=== "emprunt&eacute") echo "disabled"; ?>> 
            <a href="disponible.php?id=1">
                <input class="emprunt" type="submit" value="Rendre"> 

            </form> 
        </div>

        <div class=parent>
            <img class="coverManga" SRC="assets/onepiece01.jpg" />
            <br />
            <p>Luffy, n'a qu'un rêve devenir le seigneur des pirates. </p>
            <a href="etat.php?id=2">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <a href="emprunter.php?id=2">
                 <input class="emprunt" type="submit" value="Emprunté"  <?php if(getState("One piece")==="R&eacuteserv&eacute" ||getState("One piece")=== "emprunt&eacute") echo "disabled"; ?>> 
             </form> 

        </div>

        <div class="parent">

            <img class="coverManga" SRC="assets/dbz01.jpg" />
            <br />
            <p>Une nouvelle menace plane sur la Planete terre.</p>
            <a href="etat.php?id=3">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <a href="emprunter.php?id=3">
                 <input class="emprunt" type="submit" value="Emprunté" <?php if(getState("dbz")==="R&eacuteserv&eacute" ||getState("dbz")=== "emprunt&eacute") echo "disabled"; ?> > 
             </form> 

        </div>
    </div>
    <br />
    <h2>Les nouveautés</h2>
    <div class=classique>
        <div class=parent>
            <img class="coverManga" SRC="assets/drStone15.jpeg" />
            <br />
            <p> Les derniers aventures de Senku, le scientifique dans le monde de pierre </p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 
        </div>

        <div class=parent>
            <img class="coverManga" SRC="assets/heroaca.jpg" />
            </br>
            <p> Deku, le protégé d'all-Might continue ses exploits afin de devenir un héro professionel</p>
            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                <input class="emprunt" type="submit" value="Emprunté"> 
            </form> 
        </div>

        <div class=parent>
            <img class="coverManga" SRC="assets/aot30.jpg" />
            <br />
            <p>Eren Jaëger est pret à tout pour éradiquer la menace qui plane sur son peuple</p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
             <form action="" method="get">
                <input class="emprunt" type="submit" value="Emprunté"> 
            </form> 

        </div>

        <div class=parent>
            <img class="coverManga" SRC="assets/dbs12.jpg" />
            <br />
            <p> Quels sont les résultats des entrainements de Végéta et Son Goku </p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                <input class="emprunt" type="submit" value="Emprunté"> 
            </form> 

        </div>

        <div class=parent>
            <img class="coverManga" SRC="assets/tokyorevengers.jpg" />
            <br />
            <p> La guerre des gangs éclatent à Tokyo. Takemichi arrivera t'il a sauver sa copine ? </p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                  <input class="emprunt" type="submit" value="Emprunté"> 
            </form> 

        </div>

    </div>


    <!-- LE catalogue complet avec tout les tomes disponibles !!!!!!!!!!! -->
    <br />
    <h2>Le catalogue complet </h2>
    <div class=catalogue>
        <div class=parent2>
            <img class="coverManga" SRC="assets/dbs01.jpeg" />
            <br />
            <p> Son Goku est de retour pour de nouvelles aventures ! Il va devoir faire face à de nouveaux combattants. </p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 
        </div>

        <div class=parent2>
            <img class="coverManga" SRC="assets/drstone01.jpg" />
            <br />
            <p> Senku tente de reconquérir ce monde plongé dans un monde de pierre par la Science.</p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 
        </div>

        <div class=parent2>
            <img class="coverManga" SRC="assets/heroaca01.jpg" />
            <br />
            <p> Midoriya Izuku souhaite devenir un héros, meme sans pouvoirs !</p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 

        </div>

        <div class=parent2>
            <img class="coverManga" SRC="assets/sk01.jpg" />
            <br />
            <p> Yoh Asakura participe a une bataille pur devenir le roi des Shamans.</p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 

        </div>

        <div class=parent2>
            <img class="coverManga" SRC="assets/fmabma.jpg" />
            <br />
            <p> Prêt a tout pour retrouver leurs corps les freres Elrich pratiquent l'achimie.</p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 

        </div>

        <div class=parent2>
            <img class="coverManga" SRC="assets/DN01.jpg" />
            <br />
            <p> Light Yagami reçoit de mystérieux pouvoirs au toucher d'un livre bien spécial. </p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 


        </div>
        <div class=parent2>
            <img class="coverManga" SRC="assets/Fruits-basket01.jpg" />
            <br />
            <p> Toru Honda va faire la rencontre d'une famille particuliere aux mystérieux pouvoirs </p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 
        </div>
        <div class=parent2>
            <img class="coverManga" SRC="assets/sailormoon01.jpg" />
            <br />
            <p> Les combattantes de la justice vont défendre la terre ! Grâce a leurs pouvoirs mystiques. </p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 

        </div>
        <div class=parent2>
            <img class="coverManga" SRC="assets/codegeass01.jpg" />
            <br />
            <p> Lelouch va tout faire pour détruire l'empire Britannia grâce a son nouveau pouvoir le geass. </p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 

        </div>
        <div class=parent2>
            <img class="coverManga" SRC="assets/fairytail01.jpg" />
            <br />
            <p> Natsu jeune chasseur de dragon, va tout faire pour retrouver son maitre Ignir le dragon. </p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 
        </div>
        <div class=parent2>
            <img class="coverManga" SRC="assets/yugioh01.jpg" />
            <br />
            <p> Yugi a reussit a assemblé le puzzle du Millénium, ce qui va lui conféré des capacité dans les duels de cartes.</p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 

        </div>
        <div class=parent2>
            <img class="coverManga" SRC="assets/eyeshield2101.jpg" />
            <br />
            <p> Kobayakawa Sena va entamer une carriere de Running back au sein de l'équipe Devil Bats de Deimon.</p>

            <form action="" method="get">
                <INPUT type="submit" value="Voir l'état du Livre"> 
            </form>
            <form action="" method="get">
                 <input class="emprunt" type="submit" value="Emprunté"> 
             </form> 
        </div>

    </div>
<?php
include 'footer.php'
?>