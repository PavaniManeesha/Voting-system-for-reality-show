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
    <link rel="stylesheet" href="style\contact.css">
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



    <div class="codiv">
        <h1 style = "color:white">Contact Us</h1>
        <br>
            <form action="contactusform.php" method="POST">
                <table class="contacttable">
                  <tr>
                    <td>
                      <input type="text" placeholder="Enter Name" name="name" >
                    </td>
                  </tr>
                    <tr>
                      <td>
                        <input type="text" placeholder="Enter Email" name="email" >
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="text" placeholder="Enter Contact Number" name="number">
                      </td>
                    </tr>
                    <tr>
                      <td>
                      <textarea  name="textarea" rows="8" cols="50"> </textarea>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <button class="btn" name="submit" type="submit">Send</button>
                      </td>
                    </tr>

                  
                </table>
                
                
                
                
                
                
                
                <br><br>
                
                
				<br>
				
            </form>
        </div>
        
		


<?php
    include'footer.php'
?>
</body>
</html>


