  <div class="divfooter">
    <ul class="footer">
      <li><a href="index.php">Home</a></li>
      <?php if($isLoggedIn){ ?><li><a href="catalogue.php">Catalogue</a></li><?php } ?>
      <li><a href="senrengistrer.php">S'inscrire</a></li>
      <li><a href="seconnecter.php">Se connecter</a></li>
      <?php if($isLoggedIn){ ?><li><a href="panier.php">Panier</a></li><?php } ?>
  </ul>
    <p> 
      Développez par l'UTEC Industry DEV
    </p>
  <div>
</body>
</html>