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


<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px ; margin-top: 5%">

  <div class="w3-center w3-container w3-card" style="margin-top: 10% ; margin-bottom: 7%">
    <h1>Me contacter ! </h1>
  </div>

  <div class=" w3-padding-16 w3-container w3-content w3-xlarge w3-margin-top" style="margin-top:30px;margin-bottom:30px;background-color:#f2f4f4;" >      
    <form method="post" action="Mail.php">
      <legend>Vos coordonnées</legend>
        <p><label for="nom">Nom et Prénom :</label></p>
        <input type="text" id="nom" name="nom"/>
        <p>Email :</p>
        <input type="text" id="email" name="email" />
        <p><label for="objet">Objet :
          </label><input type="text" name="objet"/></p>
        <div  class="w3-center" >
          <p>Un commentaire ?</p>
          <textarea name="message" rows="6" cols="60"></textarea><br>
          <div style="text-align:center;">
            <input type="submit" name="envoi" value="Envoyer le formulaire !" />
          </div>
        </div>
    </form>
  </div>

</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-grey w3-center w3-opacity w3-xlarge" style="margin-top:15%">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <p class="w3-medium">Utiliser par Mathieu Thomas, crée par W3.css.</p>
  <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-red">w3.css</a></p>
</footer>

<script>

// Toggle grid padding
function myFunction() {
    var x = document.getElementById("myGrid");
    if (x.className === "w3-row") {
        x.className = "w3-row-padding";
    } else {
        x.className = x.className.replace("w3-row-padding", "w3-row");
    }
}

// Open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
