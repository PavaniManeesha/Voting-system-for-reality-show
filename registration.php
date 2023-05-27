
<html>
<head>
    <link rel="stylesheet" href="style\registration.css">
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
            <a href="signin.php">  
                  <button class="btn-nav"> Log in </button>
                </a>
                
          </td>
          <td rowspan="2">
            <img src="ImagesSL\logo.jpg" alt="" class="logo">
          </td>
        </tr>
        <tr>
          <td>
             <div class="topnav">
             <a class="padding-11-16" href="homepage.php">Home</a>
					  <a class="padding-11-16" href="competitor.php">Competitor</a>
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


        
	<br>
	  <form action ="" method="post">
        <div class="regi">
            <center>
            <button class="social facebook">Login with Facebook</button> 
    
            <button class ="social twitter">Login with Twitter</button><br><br>
			 
            <input type="text" placeholder="First Name" name="fname"  required>
	
	   
            <input type="text" placeholder="Last Name" name="lname"  required><br><br>
	
	        
            <input type="text" placeholder="Enter E-mail" name="email"  required><br><br>

        
            <input type="password" placeholder="Enter Password" name="password"  required><br><br>

        
            <input type="password" placeholder="Re-enter Password" name="re_password"  required><br><br>
         
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a></p><br>

            <button class ="submit" name="submit">Create Account</button></center>
        </div>
      
            <div class=" signin">
              <center> <p>Already a member?<a href="#">Sign in</a></p><center>
            </div>
    </form>


<?php
    include'footer.php'
?>
</body>
</html>


<?php
include'config.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    if($password == $re_password){
      $query = "INSERT INTO `reguser` (`regUserID`, `firstName`, `lastName`, `age`, `address`, `number`, `nic`, `email`, `password`) 
      VALUES (NULL, '$fname', '$lname', '$age', '$address', '$number', '$nic', '$email', '$password')"; 
        $result = mysqli_query($link,$query);
        header('Location: signin.php');
                
    }else{
      echo'
          <script>
            alert("Password Error :( \n Check your password again ");
          </script>
          '
          ;
    }
}
?>