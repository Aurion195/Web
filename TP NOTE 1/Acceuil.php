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
          <a href="Propos.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">A Propos de moi</a>
          <a href="Monde.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Photo du monde</a>
          <a href="Contact.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Me contacter</a>
        </div>
      </nav>
      <div class="w3-center w3-large" style="margin-right:0%">
        <span class="w3-button w3-xxlarge w3-black w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <div class="w3-padding-24">
          <i class="fa fa-male" style="margin-right:25%"> <?php echo $_SESSION['pseudo']; ?></i> 
          Photo en vrac
          <i class="fa fa-arrow-right" style="margin-left:25%"><a href="Page d'acceuil.html">Se déconnecter !</a></i>
        </div>
      </div>
    </div>



  <!-- Grille photo du départ -->
  <div class="w3-container " style="margin-top: 8%">
    
    <div class="w3-center w3-container w3-card w3-xlarge">
      Bienvenue sur mon site ! ici vous trouverez des photos venant du monde entier ! 
      <br><br><br>
      <p>Le mot « photographie » a été créé par John Herschel et provient de deux racines d'origine grecque :</p>
      <p>le préfixe « photo- » (φωτoς, photos : lumière, clarté) — « qui procède de la lumière », « qui utilise la lumière » ;</p>
    </div>

    <div  class="w3-content mySlides" style="max-width:1200px ; margin-top:5%">

      <div class="w3-content w3-margin-top w3-third">
        <img src="Photos/Tigre.jpg" style="width:350px">
        <img src="Photos/bois.jpg" style="width:350px">
        <img src="Photos/riviere.jpg" style="width:350px">
        <img src="Photos/Monde.jpg" style="width:350px">
      </div>


      <div class="w3-third w3-content ">
        <img src="Photos/Lion.jpg" style="width:350px">
        <img src="Photos/bois_2.jpg" style="width:350px">
        <img src="Photos/riviere-2.jpg" style="width:350px">
        <img src="Photos/Monde_2.jpg" style="width:350px">
      </div>


      <div class="w3-third w3-content ">
        <img src="Photos/Ours.jpg" style="width:350px">
        <img src="Photos/bois_3.jpg" style="width:350px">
        <img src="Photos/riviere_3.jpg" style="width:350px">
        <img src="Photos/Monde_3.jpg" style="width:350px">
      </div>
    </div>


    <div  class="w3-content mySlides" style="max-width:1200px ; margin-top:5%">

      <div class="w3-third w3-content ">
        <img src="Photos/Ours.jpg" style="width:350px">
        <img src="Photos/bois_3.jpg" style="width:350px">
        <img src="Photos/riviere_3.jpg" style="width:350px">
        <img src="Photos/Monde_3.jpg" style="width:350px">
      </div>

      <div class="w3-content w3-margin-top w3-third">
        <img src="Photos/Tigre.jpg" style="width:350px">
        <img src="Photos/bois.jpg" style="width:350px">
        <img src="Photos/riviere.jpg" style="width:350px">
        <img src="Photos/Monde.jpg" style="width:350px">
      </div>


      <div class="w3-third w3-content ">
        <img src="Photos/Lion.jpg" style="width:350px">
        <img src="Photos/bois_2.jpg" style="width:350px">
        <img src="Photos/riviere-2.jpg" style="width:350px">
        <img src="Photos/Monde_2.jpg" style="width:350px">
      </div>
    </div>

    <div  class="w3-content mySlides" style="max-width:1200px ; margin-top:5%">

      <div class="w3-third w3-content ">
          <img src="Photos/Lion.jpg" style="width:350px">
          <img src="Photos/bois_2.jpg" style="width:350px">
          <img src="Photos/riviere-2.jpg" style="width:350px">
          <img src="Photos/Monde_2.jpg" style="width:350px">
      </div>

      <div class="w3-third w3-content ">
        <img src="Photos/Ours.jpg" style="width:350px">
        <img src="Photos/bois_3.jpg" style="width:350px">
        <img src="Photos/riviere_3.jpg" style="width:350px">
        <img src="Photos/Monde_3.jpg" style="width:350px">
      </div>

      <div class="w3-content w3-margin-top w3-third">
        <img src="Photos/Tigre.jpg" style="width:350px">
        <img src="Photos/bois.jpg" style="width:350px">
        <img src="Photos/riviere.jpg" style="width:350px">
        <img src="Photos/Monde.jpg" style="width:350px">
      </div>
    </div>
  </div>

  <div class="w3-container w3-center w3-card" style="margin-top: 3%">
    Dans ce site internet vous trouverez des photos venant du monde entier, elles sont en libre accès pour tout le monde car pour moi la photographie n'a pas de prix et pas de frontières !
    <br>
    Du moment que vous mettez le nom de mon site en source ou en contribution cela me convient ! 
    <br>
    Bon visionnage à tous ! :)
    <br><br><br>
    <a href="Monde.php"> cliquer ici pour découvrir les photos !</a> Ou aller dans la barre de menu et cliquer sur le monde !!!  
  </div>


<!-- Footer -->
<footer class="w3-container w3-grey w3-center w3-opacity w3-xlarge" style="margin-top:10%">
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

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 7000); // Change image every 7 seconds
}

</script>

</body>
</html>
