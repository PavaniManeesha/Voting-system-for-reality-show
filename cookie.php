<?php
$cookie_name = "user";

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    header('Location: signin.php');
}
?>
