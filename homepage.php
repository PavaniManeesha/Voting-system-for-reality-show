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


<html>
<head>
    <link rel="stylesheet" href="style\homepage.css">
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
					    <a class="padding-11-16"  href="vote.php" <?php if ($vote == 'voted') { echo('style="pointer-events: none;"');}?> >Vote</a>              
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



<div class="slideshow-container">




<div class="mySlides fade">
  <img src="ImagesSL\img07.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <img src="ImagesSL\img02.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <img src="ImagesSL\img03.jpg" style="width:100%">

</div>

  <div class="mySlides fade">
  <img src="ImagesSL\img04.jpg" style="width:100%">

</div>

  <div class="mySlides fade">
  <img src="ImagesSL\img05.jpg" style="width:100%">

</div>

<!-- Next and previous buttons -->
<div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

  <!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
</div>


<?php
    include'footer.php'
?>

</body>


<!-- title bar image = https://www.geeksforgeeks.org/how-to-add-icon-logo-in-title-bar-using-html/
slide show = https://www.w3schools.com/howto/howto_js_slideshow.asp
footer icons = https://www.w3schools.com/howto/howto_css_social_media_buttons.asp 
-->



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
  
  var video = document.getElementById("myVideo")
  
}


</script>