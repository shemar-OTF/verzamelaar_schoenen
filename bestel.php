<!DOCTYPE html>
<html>
<head>
    <title>Bestelpagina</title>
    <link rel="stylesheet" href="bestel.css">
    <script src="bestel.js" defer></script>
</head>
<body>
<nav>
        <div class="logo">
           <a href="./index.html"><img src="./img/logo.png" alt="Logo Image"></a> 
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
        <li><a href="./index.html">Home</a></li>
        <li><a href="./schoenen.html">schoenen</a></li>
        <li><a href="./bestel.php">bestel</a></li>
        <li><a href="./contact.html" >Contact me</a></li>
        <li><a href="./login.php" class="join-button">Admin</a></li>
        </ul>
    </nav>
    <div class="slideshow-container">

      <div class="mySlides fade">
       
        <img src="./img/slide1.png" style="width:100%">
       
      </div>
      
      <div class="mySlides fade">
        
        <img src="./img/slide2.png" style="width:100%">
       
      </div>
      
      <div class="mySlides fade">
     
        <img src="./img/slide3.jpg" style="width:100%">
       
        
      </div>
      
      </div>
 
</div>
<div class="slogan">
<h3>HOW IS YOURE SHOE GAME</h3>
</div>

<di id="container4"></di>
    <h1>Plaats een bestelling</h1>

    <form method="post" action="verwerk.php">
        Klantnaam: <input type="text" name="klantnaam"><br>
        Schoenmerk: <input type="text" name="schoenmerk"><br>
        Schoenmodel: <input type="text" name="schoenmodel"><br>
        Maat: <input type="text" name="maat"><br>
        Geslacht:
        <select name="geslacht">
            <option value="heren">Heren</option>
            <option value="dames">Dames</option>
        </select><br>
        Hoeveelheid: <input type="number" name="hoeveelheid"><br>
        <input type="submit" value="Bestel">
    </form>


    <footer class="footer">
  <div class="footer-left col-md-4 col-sm-6">
    <p class="about">
      <span> dream</span> Ut congue augue non tellus bibendum, in varius tellus condimentum. In scelerisque nibh tortor, sed rhoncus odio condimentum in. Sed sed est ut sapien ultrices eleifend. Integer tellus est, vehicula eu lectus tincidunt,
      ultricies feugiat leo. Suspendisse tellus elit, pharetra in hendrerit ut, aliquam quis augue. Nam ut nibh mollis, tristique ante sed, viverra massa.
    </p>

  </div>
  <div class="footer-center col-md-4 col-sm-6">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span> Sint Jacobstraat 12 </span> Rotterdam, Nederland</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p> (+31) 6666 234 345</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="#"> office@dream.com</a></p>
    </div>
  </div>
  <div class="footer-right col-md-4 col-sm-6">
    <h2> dream</h2>
    <p class="menu">
    <a href="./index.html"> Home</a> |
        <a href="./schoenen.html"> schoenen</a> |
        <a href="./bestel.php"> bestel</a> |
        <a href="./contact.html"> contact me</a> |
    </p>
    
  </div>
</footer>
</body>
</html>