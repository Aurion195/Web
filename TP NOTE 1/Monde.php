<?php session_start() ; ?>
<!DOCTYPE html>
  <html>
    <title>Mathieu Thomas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </html>
  <body>


    <!-- Header -->

    <div class="w3-top w3-text-white w3-allerta w3-large" style="background-color:#000000;">

    <!-- Menu de navigation -->
      <nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="margin-bottom: ">
          <i class="fa fa-remove"></i>
        </a>
        <div class="w3-bar-block w3-center w3-xxlarge">
          <a href="Acceuil.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Acceuil</a>
          <a href="Monde.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Photo du monde</a>
          <a href="Propos.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">A propos de moi</a>
        </div>
      </nav>
      <div class="w3-center w3-large" style="margin-right:0%">
        <span class="w3-button w3-xxlarge w3-black w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <div class="w3-padding-24">
          <i class="fa fa-male" style="margin-right:25%"><?php echo $_SESSION['pseudo']; ?></i> 
          Photo en vrac
          <i class="fa fa-arrow-right" style="margin-left:25%"><a href="Page d'acceuil.html">Se déconnecter !</a></i>
        </div>
      </div>
    </div>


    <!-- Page !-->

    <div class="w3-container w3-center w3-card" style="margin-top: 5% ; padding : 2%">
      <form method="post" action="search.php">
        <i class="fa fa-search-minus" aria-hidden="true"> </i> 
        <input type="text" name="Mot" size="15">
        <input type="submit" value="Rechercher" alt="Lancer la recherche!">
      </form>
    </div>


  <!-- 1er partie de la recherche !-->

  <div class="w3-row-padding w3-container w3-center" style="margin-top: 5%">

    <div class="w3-third">
      <a href="Monde/Afrique.php"><img src="Photos/Monde/afrique.jpg" style="width: 70%"></a>
    </div>

    <div class="w3-third">
      <a href="Monde/Asie.php"><img src="Photos/Monde/asie.png"></a>
    </div>

    <div class="w3-third">
      <a href="Monde/Europe.php"><img src="Photos/Monde/Europe.png" style="width: 75%"></a>
    </div>

  </div>


  <div class="w3-row-padding w3-container w3-center" style="margin-top: 2%">

    <div class="w3-third">
      Afrique
    </div>

    <div class="w3-third">
      Asie
    </div>

    <div class="w3-third">
      Europe
    </div>

  </div>



  <!-- Deuxième partie de la recherche !-->

  <div class="w3-row-padding w3-container w3-center" style="margin-top: 10%">

    <div class="w3-third">
      <a href="Monde/Ameriquenord.php"><img src="Photos/Monde/Ameriquenord.jpg" style="width: 75%"></a>
    </div>

    <div class="w3-third">
      <a href="Monde/Oceanie.php"><img src="Photos/Monde/ocenai.png" style="width: 70%"></a>
    </div>

    <div class="w3-third">
      <a href="Monde/Ameriquesud.php"><img src="Photos/Monde/AmeriqueSud.png" style="width: 40%"></a>
    </div>

  </div>

  <div class="w3-row-padding w3-container w3-center" style="margin-top: 2%">

    <div class="w3-third">
      Amérique du Nord
    </div>

    <div class="w3-third">
      Océanie
    </div>

    <div class="w3-third">
      Amérique du Sud
    </div>

  </div>



<!-- Footer -->

<footer class="w3-container w3-grey w3-center w3-opacity w3-xlarge" style="margin-top:15%">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <p class="w3-medium">Utiliser par Mathieu Thomas.</p>
  <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-red">w3.css</a></p>
</footer>

<script>

// Ouvrir et fermer
function w3_open() {
    document.getElementById("mySidebar").style.width = "100% ";
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

</script>

</body>
</html>