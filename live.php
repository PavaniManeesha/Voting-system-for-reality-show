<?php
session_start();
global $Utype;
if(!empty($_SESSION['usertype'])){
  $Utype = $_SESSION['usertype'];
}

global $vote;
if(!empty($_SESSION['vote'])){
  $vote = $_SESSION['vote'];
}

?>


?>
<html>
<head>
    <link rel="stylesheet" href="style\live.css">
    <link rel="stylesheet" href="style\layout.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<title>
Star Reality
</title>
<link rel="shortcut icon" href="ImagesSL\logo.jpg">

<body class = "light-grey">


<div class = "light-grey">
 <div class="nav-container">
      <table class="nav-table">
        <tr>
          <td>
          
            <?php
            if(!empty($_SESSION["ID"])){ 
              echo ' <a href="user.php">
              <img src="ImagesSL\user.jpg" class="user-img">
              </a> ';
             }else{
               echo '<img src="ImagesSL\user.jpg" class="user-img">';
              
             };
            
            if(!empty($_SESSION["usertype"])){ $user =  $_SESSION["usertype"];} ;
                if(empty($user)){
                  echo '<a href="signin.php">  
                  <button class="btn-nav"> Log in </button>
                  </a>
                  <a href="registration.php">
                    <button class="btn-nav"> Sign up </button>
                  </a>';
                } else{
                  echo'
                  <a href="signout.php">
                    <button class="btn-nav"> Sign Out </button>
                  </a>';
                }
            ?>
          </td>
          <td rowspan="2">
            <img src="ImagesSL\logo.jpg" alt="" class="logo">
          </td>
        </tr>
        <tr>
          <td>
             <div class="topnav">
             <a class="padding-11-16" href="homepage.php">Home</a>
					    <a class="padding-11-16"  href="vote.php" <?php if($vote == 'voted'){ echo('style="pointer-events: none;"');}?> >Vote</a>              
					  <a class="padding-11-16" href="judge.php">Judge</a>
            <?php if($Utype = 'judge'){ echo ' <a class="padding-11-16" href="result.php"> Result </a> '; } ;?>
					  <a class="padding-11-16" href="live.php">Live stream</a>
					  <a class="padding-11-16" href="mobileapp.php">Mobile App</a>
					  <a class="padding-11-16" href="contactus.php">Contact Us</a>
					  <a class="padding-11-16" href="aboutus.php">About Us</a>
				</div>
      </td> 
        </tr>
      </table>    
    </div>

    <img src="ImagesSL\back.jpg" class="bgimg" alt="">





    <table class="tab1" >
<tr>
    <td><h2 style="color:rgb(243, 239, 0);" >Slideshow Gallery</h2>

      <div class="container">
        <div class="mySlides">
          <div class="numbertext">1 / 6</div>
          <img src="ImagesSL\Finals.jpg" class="img">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">2 / 6</div>
          <img src="ImagesSL\L_s.jfif"style="width:100%">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">3 / 6</div>
          <img src="ImagesSL\Live stream ph.jpg" style="width:100%">
        </div>
          
        <div class="mySlides">
          <div class="numbertext">4 / 6</div>
          <img src="ImagesSL\R.jfif"style="width:100%">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">5 / 6</div>
          <img src="ImagesSL\rising-star.jpg" style="width:100%">
        </div>
          
        <div class="mySlides">
          <div class="numbertext">6 / 6</div>
          <img src="ImagesSL\Star.jpg" style="width:100%">
        </div>
          
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      
        <div class="caption-container">
          <p id="caption"></p>
        </div>
      
        <div class="row">
          <div class="column">
            <img class="demo cursor" src="ImagesSL\Finals.jpg" style="width:100%" onclick="currentSlide(1)" alt="Stars">
          </div>
          <div class="column">
            <img class="demo cursor" src="ImagesSL\L_s.jfif" style="width:100%" onclick="currentSlide(2)" alt="Star-TV Reality">
          </div>
          <div class="column">
            <img class="demo cursor" src="ImagesSL\Live stream ph.jpg" style="width:100%" onclick="currentSlide(3)" alt="Judges">
          </div>
          <div class="column">
            <img class="demo cursor" src="ImagesSL\R.jfif" style="width:100%" onclick="currentSlide(4)" alt="Competitors">
          </div>
          <div class="column">
            <img class="demo cursor" src="ImagesSL\rising-star.jpg" style="width:100%" onclick="currentSlide(5)" alt="Finals">
          </div>    
          <div class="column">
            <img class="demo cursor" src="ImagesSL\Star.jpg" style="width:100%" onclick="currentSlide(6)" alt="The Winner">
          </div>
        </div>
      </div>   
    </td>
    <td >
      
      <iframe width="420" height="315"
      src="https://www.youtube.com/embed/BnEvgoE4Cak">
      </iframe>


    </td>
   
 </tr>
</table>


<?php
    include'footer.php'
?>
</body>
</html>



<script>
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
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
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
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
  </script>
