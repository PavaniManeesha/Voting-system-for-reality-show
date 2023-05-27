
<html>
<head>
    <link rel="stylesheet" href="style\competitor.css">
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

    <img src="ImagesSL\bg.jpg" class="bgimg" alt="">




        
<table class="comptable">
	<tr>
		
				<?php
			include "config.php";
				$sql = "SELECT * FROM `groupvote`";
				$result = mysqli_query($link, $sql);
				if($result = mysqli_query($link, $sql)){
									
									if(mysqli_num_rows($result) > 0){							
										while($row = mysqli_fetch_array($result)){
										echo'	
										<form action="groupvote.php" method="POST"> 
                      <td>						
                      <div class="row">
                      <div class="column">
                        <div class="card">
                        <img src="ImagesSL/starr.jpg" alt="Jane" style="width:100%" class="img">
                        <div class="container">
                          <h2>' .$row["groupname"]. '</h2>
                        
                          <input type="hidden" name="ID" value="'.$row["GroupID"].' ">                          
                          <button type="submit" name="submit" class="button">Vote </button> 

                        </div>
                        </div>
                      </div>			
                      </td>	
                      </form>			
											';													
										}
									}
				}
			?>

	</tr>
</table>







<?php
    include'footer.php'
?>
</body>
</html>