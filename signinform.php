<?php
include ("config.php");
session_start();

        

if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `reguser`";
    $select_query = mysqli_query($link, $query);


        while($row = mysqli_fetch_assoc($select_query)){

                $username_check = $row['firstName'];
                $email_check = $row['email'];
                $password_check = $row['password'];
                $ID_check = $row['regUserID'];

                    
                if(($username == $username_check and $password == $password_check) or ($username == $email_check and $password == $password_check )){
                        echo($username_check);

                            $_SESSION["usertype"] = "user";
                            $_SESSION["ID"] = $ID_check;
                            $_SESSION["name"] = $username_check;
                        /*
                        $cookie_name = "user";
                        $cookie_value = "competitor";
                        setcookie($cookie_name, $cookie_value, time() + (86400), "/");
                        */

                        header('Location: homepage.php');
                }
        }
}


if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `judge`";
    $select_query = mysqli_query($link, $query);


        while($row = mysqli_fetch_assoc($select_query)){

                $username_check = $row['firstName'];
                $email_check = $row['email'];
                $password_check = $row['password'];
                $ID_check = $row['JID'];

                    
                    if(($username == $username_check and $password == $password_check) or ($username == $email_check and $password == $password_check )){
                        echo($username_check);

                        $_SESSION["usertype"] = "judge";
                        $_SESSION["ID"] = $ID_check;
                        $_SESSION["name"] = $username_check;

                        /*
                        $cookie_name = "user";
                        $cookie_value = "judge";
                        setcookie($cookie_name, $cookie_value, time() + (86400), "/"); 
                        */
                        
                        header('Location: homepage.php');
                }
        }
}
//echo( '<script> alert("Wrong Password :( \n Try Again!")</script>');
header('Location: signinform.php');



?>
