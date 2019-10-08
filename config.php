<?php
define('SERVER_NAME', 'Home');
define('PANEL_THEMES', 'Standart');

define('USER','admin');
define('PASSWORD','admin');
define('LANG','tr');




//---------------------------------------------------------------
define('ROOTDIR',$_SERVER['DOCUMENT_ROOT']);
$langpath=$_SERVER['DOCUMENT_ROOT']."/include/lang/".LANG.".php";
include($langpath);
$testuserpath=$_SERVER['DOCUMENT_ROOT']."/include/login/test.php";
include($testuserpath);
$themepath=$_SERVER['DOCUMENT_ROOT']."/themes/".PANEL_THEMES."/config.php";
include($themepath);


$pluginspath=$_SERVER['DOCUMENT_ROOT']."/plugins/";
$pluginspath_client="http://".$_SERVER['SERVER_NAME']."/plugins/";












?>
