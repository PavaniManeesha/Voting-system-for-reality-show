<?php
session_start();
?>

<html>
<head>
    <link rel="stylesheet" href="style\vote.css">
    <link rel="stylesheet" href="style\layout.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<title>
Star Reality
</title>
<link rel="shortcut icon" href="ImagesSL\logo.jpg">

<body class = "light-grey">



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
					  <a class="padding-11-16" href="vote.php">Vote</a>
					  <a class="padding-11-16" href="judge.php">Judge</a>
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


    <table class ="v-table">
    <h2 class="vt">Vote</h2>
		
		<table border = "1px">
        <tr>
        <td>
            <div class="v-container">
                <img src="ImagesSL\solo.jpg" alt="Avatar" class="v-image">
                <div class="v-overlay">
                  <div class="v-text"> Solo </div>
				  
                </div>
              </div>
			  <br>
			  <a href="competitor.php"> 
			  		<button class="bt" type="button">Vote</button>
			  </a>
        </td>
		
		<td>
			<div class="v-container">
                <img src="ImagesSL\duet.jpg" alt="Avatar" class="v-image">
                <div class="v-overlay">
                  <div class="v-text"> Duet </div>
                </div>
              </div>
				<br>
			  <a href="duet.php"> 
			  		<button class="bt" type="button">Vote</button>
			  </a>
		</td>
		
		<td>
			<div class="v-container">
                <img src="ImagesSL\trio.jpg" alt="Avatar" class="v-image">
                <div class="v-overlay">
                  <div class="v-text"> Trio </div>
                </div>
              </div>
				<br>
			  <a href="trio.php"> 
			  		<button class="bt" type="button">Vote</button>
			  </a>
		</td>
		
		<td>
			<div class="v-container">
                <img src="ImagesSL\group.jpg" alt="Avatar" class="v-image">
                <div class="v-overlay">
                  <div class="v-text"> Group </div>
                </div>
              </div>
			<br>
      <a href="group.php"> 
			  		<button class="bt" type="button">Vote</button>
			  </a>
		</td>
		
	


                    <?php
                include'footer.php'
                    ?>
</body>
</html>


