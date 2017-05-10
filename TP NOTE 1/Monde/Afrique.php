<?php session_start() ; ?>
<!DOCTYPE html>
  <html>
    <head>
    <title>Mathieu Thomas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>


    <!-- Header -->

    <div class="w3-top w3-text-white w3-allerta w3-large" style="background-color:#000000;">

    <!-- Menu de navigation -->

      <nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="margin-bottom: ">
          <i class="fa fa-remove"></i>
        </a>
        <div class="w3-bar-block w3-center w3-xxlarge">
          <a href="../Monde.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Photo du monde</a>
        </div>
      </nav>
      <div class="w3-center w3-large" style="margin-right:0%">
        <span class="w3-button w3-xxlarge w3-black w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <div class="w3-padding-24">
          <i class="fa fa-male" style="margin-right:25%"><?php echo $_SESSION['pseudo']; ?></i> 
          Photo en vrac
          <i class="fa fa-arrow-right" style="margin-left:25%"><a href="../Page d'acceuil.html">Se déconnecter !</a></i>
        </div>
      </div>
  
    </div>

    <!--Envoi de fichier !-->

    <div class="w3-center w3-content" style="margin-top: 7%">

      <p>Vous avez des photos a nous faire partager ? envoyer moi les et je les mettrais sur le site !</p>
      <p>Aidez-moi à améliorer mon site en mettant vos proprs photos ! </p>

      <form action="../Fichier.php" method="post" enctype="multipart/form-data">
        <input type="file" name="monfichier" /><br>
        <input type="submit" value="Envoyer le fichier" />
      </form>

    </div>


    <!-- Corp de la page !-->
    <div class="w3-content w3-center" style="margin-top: 7%">

      <?php

        $dir_nom = '../Photos/Monde/Afrique'; // dossier listé (pour lister le répertoir courant : $dir_nom = '.'  --> ('point')
        $dir = opendir($dir_nom) or die('Erreur de listage : le répertoire n\'existe pas'); // on ouvre le contenu du dossier courant
        $fichier= array(); // on déclare le tableau contenant le nom des fichiers
        $dossier= array(); // on déclare le tableau contenant le nom des dossiers
 
        while($element = readdir($dir)) 
        {
          if($element != '.' && $element != '..') {
            if (!is_dir($dir_nom.'/'.$element)) {$fichier[] = $element;}
            else {$dossier[] = $element;}
          }
        }
 
        closedir($dir);
 
        if(!empty($dossier)) 
        {
          sort($dossier); // pour le tri croissant, rsort() pour le tri décroissant
          foreach($dossier as $lien)
          {
            echo "<a href=\"$dir_nom/$lien \">$lien</a>";
          }
        }
 
        if(!empty($fichier))
        {
          sort($fichier);// pour le tri croissant, rsort() pour le tri décroissant
          foreach($fichier as $lien) 
          {
              echo "<img src=\"$dir_nom/$lien \">";
          }
        }
      ?>

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