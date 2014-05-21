<?php
include("../../config.php");
session_start();
ob_start();
if(($_POST["username"]==USER) and ($_POST["password"]==PASSWORD)){
$_SESSION["login"] = "true";
$_SESSION["user"] = USER;
$_SESSION["pass"] = PASSWORD;
header("Location:../../index.php");
}
else{
echo "Your user name or password is incorrect<br>";
header("Refresh: 2; url=index.php");
}
ob_end_flush();
?>
