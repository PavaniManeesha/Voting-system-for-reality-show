<?php
include ("config.php");

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
    <link rel="stylesheet" href="style\result.css">
    <link rel="stylesheet" href="style\layout.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
					    <a class="padding-11-16"  href="vote.php" <?php if ($vote == 'voted'){ echo('style="pointer-events: none;"');}?> >Vote</a>              
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

    <div style="position:sticky;" >
    <table class="resulttable">
      <tr>
        <td>
          <canvas id="SChart" style="width:100%;max-width:600px"></canvas>
        </td>
        <td>
          <canvas id="DChart" style="width:100%;max-width:600px"></canvas>
        </td>
      </tr>
      <tr>
        <td>
          <canvas id="TChart" style="width:100%;max-width:600px"></canvas>
        </td>
        <td>
          <canvas id="GChart" style="width:100%;max-width:600px"></canvas>
        </td>
      </tr>
    </table>

    </div>

    <?php
    include'footer.php'
    ?>       

</body>
</html>


<!-- Solo -->


<script>
var SxValues = [
		<?php
			
				$sql = "SELECT * FROM `competitors`";
				$result = mysqli_query($link, $sql);
				if($result = mysqli_query($link, $sql)){
									
									if(mysqli_num_rows($result) > 0){							
										while($row = mysqli_fetch_array($result)){
										echo ' " '.$row["firstName"].' ", ';													
									}
								}
			    }
			?>
	];
var SyValues = [<?php
				$sql = "SELECT * FROM `result` WHERE `CompID` is not NULL;";
				$result = mysqli_query($link, $sql);
				if($result = mysqli_query($link, $sql)){
									
									if(mysqli_num_rows($result) > 0){							
										while($row = mysqli_fetch_array($result)){
										echo $row["vote"].',';											
									}
								}
			}
			?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("SChart", {
    type: "doughnut",
  data: {
    labels: SxValues,
    datasets: [{
      backgroundColor: barColors,
      data: SyValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Solo Competitor Vote"
    }
  }
});
</script>


<!-- Duo -->

<script>
var DxValues = [
		<?php
			
				$sql = "SELECT * FROM `duelvote`";
				$result = mysqli_query($link, $sql);
				if($result = mysqli_query($link, $sql)){
									
									if(mysqli_num_rows($result) > 0){							
										while($row = mysqli_fetch_array($result)){
										echo ' " '.$row["groupname"].' ", ';													
									}
								}
			    }
			?>
	];
var DyValues = [<?php
				$sql = "SELECT * FROM `result` WHERE `DualID` is not NULL;";
				$result = mysqli_query($link, $sql);
				if($result = mysqli_query($link, $sql)){
									
									if(mysqli_num_rows($result) > 0){							
										while($row = mysqli_fetch_array($result)){
										echo $row["vote"].',';											
									}
								}
			}
			?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("DChart", {
    type: "doughnut",
  data: {
    labels: DxValues,
    datasets: [{
      backgroundColor: barColors,
      data: DyValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Duo Competitor Vote"
    }
  }
});
</script>


<!-- Trio -->


<script>
var TxValues = [
		<?php
			
				$sql = "SELECT * FROM `triovote`";
				$result = mysqli_query($link, $sql);
				if($result = mysqli_query($link, $sql)){
									
									if(mysqli_num_rows($result) > 0){							
										while($row = mysqli_fetch_array($result)){
										echo ' " '.$row["groupname"].' ", ';													
									}
								}
			    }
			?>
	];
var TyValues = [<?php
				$sql = "SELECT * FROM `result` WHERE `TrioID` is not NULL;";
				$result = mysqli_query($link, $sql);
				if($result = mysqli_query($link, $sql)){
									
									if(mysqli_num_rows($result) > 0){							
										while($row = mysqli_fetch_array($result)){
										echo $row["vote"].',';											
									}
								}
			}
			?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("TChart", {
    type: "doughnut",
  data: {
    labels: TxValues,
    datasets: [{
      backgroundColor: barColors,
      data: TyValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Trio Competitor Vote"
    }
  }
});
</script>


<!-- Group -->


<script>
var GxValues = [
		<?php
			
				$sql = "SELECT * FROM `groupvote`";
				$result = mysqli_query($link, $sql);
				if($result = mysqli_query($link, $sql)){
									
									if(mysqli_num_rows($result) > 0){							
										while($row = mysqli_fetch_array($result)){
										echo ' " '.$row["groupname"].' ", ';													
									}
								}
			    }
			?>
	];
var GyValues = [<?php
				$sql = "SELECT * FROM `result` WHERE `GroupID` is not NULL;";
				$result = mysqli_query($link, $sql);
				if($result = mysqli_query($link, $sql)){
									
									if(mysqli_num_rows($result) > 0){							
										while($row = mysqli_fetch_array($result)){
										echo $row["vote"].',';											
									}
								}
			}
			?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("GChart", {
    type: "doughnut",
  data: {
    labels: TxValues,
    datasets: [{
      backgroundColor: barColors,
      data: SyValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Group Competitor Votes"
    }
  }
});
</script>