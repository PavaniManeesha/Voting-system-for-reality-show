
<html>
<head>
    <link rel="stylesheet" href="style\signin.css">
    <link rel="stylesheet" href="style\layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            
                <a href="registration.php">
                  <button class="btn-nav"> Sign up </button>
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
					  <a class="padding-11-16" href="vote.php">vote</a>
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


<!-- form -->


<form action="signinform.php" method="POST">
<table class="signintable">
  <tr>
    <td>
      <img src="ImagesSL\user.png" alt="Avatar" class="avatar">
    </td>
    <td>
      <input type="text" placeholder="Enter Username" required name="uname" >
    </td>
  </tr>
  <tr>
    <td>
      <img src="ImagesSL\locked.png" alt="Avatar" class="avatar"> 
    </td>
    <td>
      <input type="password" placeholder="Enter Password" required name="password" >
    </td>
  </tr>
  <tr>
    <td>
    
    </td>
    <td>
      <button type="submit" name="submit" class="submit"> Sign In </button> 
     
    </td>
  </tr>
  <tr>
    <td>

    </td>
    <td>
      <center> <span class="psw">Forgot <a href="#">password?</a></span> </center>
    </td>
  </tr>
  <tr>
    <td>

    </td>
    <td>
    <a href="facebook.com" >  <button class="facebook"> f </button>  </a>
    </td>
  </tr>

</table>
</form>









<!-- form -->


<?php
    include'footer.php'
?>
</body>
</html>


