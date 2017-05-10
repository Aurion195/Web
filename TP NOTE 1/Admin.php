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

      <div class="w3-center w3-content" style="margin-top: 7%">

      <p>Ajouter des photos !</p>

      <form action="ajout.php" method="post" enctype="multipart/form-data">
        <input type="file" name="monfichier" /><br>
        <input type="submit" value="Envoyer le fichier" />
      </form>

    </div>

  <footer class="w3-container w3-grey w3-center w3-opacity w3-xlarge" style="margin-top:15%">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <p class="w3-medium">Utiliser par Mathieu Thomas.</p>
  <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-red">w3.css</a></p>
</footer>
</body>
</html>