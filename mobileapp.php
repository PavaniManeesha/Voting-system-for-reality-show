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
    <link rel="stylesheet" href="style\mobileapp.css">
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
    <td>   <div class="container">
      <img src="ImagesSL\QR app_store.JPG" alt="Avatar" class="img1">
      <div class="overlay">
        <div class="text">STAR TV</div>
      </div>
    </div></td>
    <td ><div class="container">
      <img src="ImagesSL\QR_google.JPG" alt="Avatar" class="img2">
      <div class="overlay">
        <div class="text">STAR TV</div>
      </div>
    </div></td>
    <td><h3>How to use the Mobile App</h3><video autoplay muted>
    <source class ="vid1" src="ImagesSL\how to use the app.mp4" type="video/mp4">

      </video></td>
 </tr>
</table>



<?php
    include'footer.php'
?>
</body>
</html>


