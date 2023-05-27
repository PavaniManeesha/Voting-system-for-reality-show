<?php
include ("config.php");
session_start();
global $ID ;
$ID = $_SESSION["ID"];
$type = $_SESSION["usertype"];

global $vote;

if(!empty($_SESSION['vote'])){
  $vote = $_SESSION['vote'];
}

if($type = 'user'){
$take = "SELECT * FROM `reguser` WHERE regUserID = $ID ;";
$res = mysqli_query($link, $take);

  while($row = mysqli_fetch_assoc($res)){

    $fname = $row['firstName'];
    
    $lname = $row['lastName'];
    $age = $row['age'];
    $address = $row['address'];
    $nic = $row['nic'];
    $email = $row['email'];
    $number = $row['number'];
    $password = $row['password'];
  
  }
}


if($type = 'judge'){
  $take = "SELECT * FROM `judge` WHERE JID = $ID ;";
  $res = mysqli_query($link, $take);
  
    while($row = mysqli_fetch_assoc($res)){
  
      $fname = $row['firstName'];
      
      $lname = $row['lastName'];
      $age = $row['age'];
      $address = $row['address'];
      $nic = $row['nic'];
      $email = $row['email'];
      $number = $row['number'];
      $password = $row['password'];
    
    }
  }

?>


<html>
<head>
    <link rel="stylesheet" href="style\user.css">
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
            <img src="ImagesSL\user.jpg" class="user-img">
            <?php

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
             <a class="padding-11-16"  href="vote.php" <?php if( $vote == 'voted'){ echo('style="pointer-events: none;"');}?> >Vote</a>
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




    <hr>
    <br><br>
    <div align="center" class="user"> 
        <form action="userform.php" method="POST">
            <h3>
            <label for="fname"> First Name:</label>
            <input type="text" id="Name" name="fname" value='<?php if(!empty($fname)){ echo$fname; } ;?>'>
            <br><br>
            <label for="lname"> Last Name:</label>
            <input type="text" id="Name" name="lname" value='<?php if(!empty($lname)){ echo$lname; } ;?>'>
            <br><br>
            <label for="Age">Age:</label>
            <input type="text" id="age" name="age" value='<?php if(!empty($age)){ echo$age;};?>'>
           
            <br><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value='<?php if(!empty($address)){ echo$address;};?>' >
            <br><br>
            <label for="nic">NIC:</label>
            <input type="text" id="nic" name="nic" value='<?php if(!empty($nic)){ echo$nic;};?>'>
            <br><br>
            <label for="email">E mail:</label>
            <input type="text" id="email" name="email" value='<?php if(!empty($email)){ echo$email;};?>' >
            <br><br>
            <label for="text">Number</label>
            <input type="text" id="number" name="number" value='<?php if(!empty($number)){ echo$number;};?>'>
            <br><br>
            <label for="text">Password</label>
            <input type="text"  name="password" value='<?php if(!empty($password)){ echo$password;};?>'>
            <br><br>
        

    <button type="submit" class="submit" name="submit" > update </button>
    <button type="button" class="submit">Reset</button>
    </h3>
    </div>
    </form>


<?php
    include'footer.php'
?>
</body>
</html>
