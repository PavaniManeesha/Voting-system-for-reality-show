<?php
include'config.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    if($password = $re_password){
        //$query = "INSERT INTO `reguser` ('', '$fname', '$lname', '$email', '$password')";
        $query = "INSERT INTO `reguser` (`regUserID`, `firstName`, `lastName`, `age`, `address`, `number`, `nic`, `email`, `password`) 
        VALUES (NULL, '$fname', '$lname', '$age', '$address', '$number', '$nic', '$email', '$password')";
        mysqli_query($link,$query);
    }
}
?>