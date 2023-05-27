<?php
include ("config.php");
session_start();

$ID = $_SESSION["ID"];

if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $text = $_POST['textarea'];


    $sql = "INSERT INTO `feedback` (`FID`, `regUserID`, `name`, `email`, `contactno`, `feedback`) VALUES (NULL, '$ID', '$username', '$email', '$number', '$text')" ;

    $incert = mysqli_query($link, $sql);

    header('Location: contactus.php');

}


?>