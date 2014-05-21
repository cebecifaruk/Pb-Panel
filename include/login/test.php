<?php
session_start();
$loginpath="http://".$_SERVER['SERVER_NAME']."/include/login/index.php";
if(!(isset($_SESSION["login"]))) header ("Location:$loginpath");

?>
