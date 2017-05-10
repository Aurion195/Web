<?php session_start() ; ?>
<!DOCTYPE html>
  <html>
    <title>Mathieu Thomas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
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
          <a href="Contact.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">Me contacter</a>
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
  <div class="w3-row-padding" style="margin-top: 8%">
    <div class="w3-half w3-content w3-left">
      <img src="Photos/RiviereRouge1.jpg" style="width:350px ; height:250px ; margin-left: 15%">
    </div>
    <div class="w3-half w3-content w3-right">
      <div class="w3-container w3-padding-1 w3-center" style="margin-right:15%">
        <p>Je me présente je m'appel Thomas Mathieu, et je suis un amoureux de la photographie</p>
        <p>Pour moi la photographie est un art car cela permet d'immortaliser des moments, que ça soit en famille ou dans des lieux incongrus</p>
        <p>Ce site est un lieu de partage, ou chacun poura mettre des photographies et les montrer aux autres</p>
      </div>
    </div>
  </div>
    
    <div class="slideshow-container" style="margin-top: 5%">
      
      <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="Photos/Tales.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src="Photos/Metroid.jpg" style="width:100%">
        <div class="text">Caption Two</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="Photos/dofus.jpg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="Photos/zelda.jpg" style="width:100%">
        <div class="text">Caption Four</div>
      </div>


      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
    </div>

    <div class="w3-center w3-card" style="margin-top: 5% ; width: 50%">
      <p>Voici une liste de mes différents centre d'intérêt ! </p>
      <p> - les jeux-vidéos, </p>
      <p> - la leture, </p>
      <p> - les films, </p>
      <p> - l'apéro ! ;), </p> 
    </div>

  </div>


<!-- Footer -->
<footer class="w3-container w3-grey w3-center w3-opacity w3-xlarge" style="margin-top:15%">
  <div class="w3-container w3-center">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <p class="w3-medium">Utiliser par Mathieu Thomas, crée par W3.css.</p>
  <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-red">w3.css</a></p>
  </div>
</footer>

<script>

// Open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

</script>

</body>
</html>
