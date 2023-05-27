<?php
include ("config.php");
session_start();
$ID = $_SESSION["ID"];
$type = $_SESSION["usertype"];
echo'DONE';


if(isset($_POST['submit'])){

    if($type = 'user'){
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $nic = $_POST['nic'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];

        $query = "UPDATE `reguser` SET `firstName` = '$fname', `lastName` = '$lname', `age` = '$age', `address` = '$address', `number` = '$number', `nic` = '$nic', `email` = '$email', `password` = '$password' WHERE `reguser`.`regUserID` = '$ID' ";
    
        $result = mysqli_query($link, $query);

        echo'
        <script>
        alert("I am \n an alert box!");
        </script>
        ;';
        header('Location: homepage.php');
        ;
    }
    if($type = 'judge'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $nic = $_POST['nic'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];

        $query = "UPDATE `judge` SET `firstName` = '$fname', `lastName` = '$lname', `age` = '$age', `address` = '$address', `number` = '$number', `nic` = '$nic', `email` = '$email', `password` = '$password' WHERE `judge`.`JID` = '$ID' ";
    
        $result = mysqli_query($link, $query);

        echo'
        <script>
        alert("I am \n an alert box!");
        </script>
        ;';
        header('Location: homepage.php');
        ; 
    }
   
}
            

?>