<?php
include('../config.php');
$servername = SERVER_NAME;

echo <<<EOF
<html>
<body color="white" background=$background>

<a href="main.php" target="main"><img src=$buttonhome width="30" height="30"></a>
<right>
<a href="../include/login/logout.php" target="_top" style="float: right;" ><img src=$buttonlogout width="30" height="30"></a>
</right>

<p style="color:$header_color; text-align: $header_align;">$servername Server Control Panel</p>


</body>
</html>
EOF;

?>
