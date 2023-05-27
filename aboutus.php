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
    <link rel="stylesheet" href="style\aboutus.css">
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


    
	<div class = "About-Us">
		<h1 style="text-align:center">About Us</h2>
		
		<table>
		<tr>
		
		<td rowspan = "2">
		<img class="image" src="ImagesSL\background.jpg">
		</td>
		
		<td class="table" colspan="3">
		A new television reality begins. Star Season 6 is the Sri lanka's one and only live reality show which 
		allows the competitors to battle and the television audience to vote their favorite competitor
		in a live plaform
	
		Star Season 6 is another programme offered by the Star Tv (Pvt) Ltd to its valuable television 
		audience.Star Tv has been the Sri Lanka's most viewed televisioin channel since 2017. And has 
		received a number of awards for Star reality show as the Sri Lanka's favourite reality program
		</td>

		</tr>
		
		<tr>
			<td style="color:white; font-family:New Century Schoolbook; ">
				<img class ="trpy" src = "ImagesSL\trophy02.png">
				1st Runners Up
			</td>
			<td style="color:white; font-family:New Century Schoolbook; ">
				<img class ="trpy" src = "ImagesSL\tpy.png">
				Season 6 Champion
			</td >
			<td style="color:white; font-family:New Century Schoolbook; ">
				<img class ="trpy" src = "ImagesSL\trophy02.png">
				2nd Runners Up
			</td>
		</tr>
		
		</table>
		
		
	</div>
	


<?php
    include'footer.php'
?>
</body>
</html>


