<?php
include("config.php");
$title = SERVER_NAME;

echo <<< EOF
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<title>$title</title>
<body bgcolor="#333333">

<center>
<iframe src="panel/header.php" width="800" height="80" scrolling="no" frameborder="0" style="background-color:#e5e5e5 padding:0px; border:4px; margin:0px; border:4px solid $background_color;" ></iframe>


<iframe id=main src="panel/main.php" width="800" height= "1100" scrolling="yes" frameborder="0" style=" padding:4px; border:5px; margin:0px; background-color:$background_color " ></iframe>

</center>
<center>
<br>
<a target="_blank" href="http://cebecifaruk.com" style = "color: white" >Development by Faruk CEBECI</a>
<font size="3" face="Arial" color="white"> </font>
</center>
</body>
</html>
EOF;

?>
