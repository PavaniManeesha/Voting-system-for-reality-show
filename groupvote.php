<?php
include ("config.php");
session_start();
$user = $_SESSION["usertype"];
$UserID = $_SESSION["ID"];



if(isset($_POST['submit'])){
    /*
    echo "Done ! ";
    */
    $ID = $_POST['ID'];
    echo $ID;
    $sql = "INSERT INTO `vote` (`VID`, `regUserID`, `JID`, `CompID`, `DualID`, `TrioID`, `grp`) 
                        VALUES (NULL,   $UserID ,     NULL, NULL ,   NULL,   NULL,    $ID)";
    $incert = mysqli_query($link, $sql);

    $sql2 = "SELECT `vote` FROM `result` WHERE `GroupID` = $ID ;";

    $noOfVote = mysqli_query($link, $sql2);

    if (mysqli_num_rows($noOfVote) > 0){
        /*
        echo "Done ! ";
        */
        while($rowData = mysqli_fetch_assoc($noOfVote)){
            $voteNO = $rowData["vote"];
            /*
            echo $voteNO;
            echo "Done ! ";
            */

            $voteNO = ($voteNO + 1);

            $sqlincert = "UPDATE `result` SET `vote` = $voteNO  WHERE `result`.`GroupID` = $ID ;";

            $done = mysqli_query($link, $sqlincert);
            $_SESSION["vote"] = "voted";
            header('Location: homepage.php');

        }
    }

}
?>