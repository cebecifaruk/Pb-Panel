<?php 
include ($_SERVER['DOCUMENT_ROOT']."/config.php");
?>



<html>

<?php

$output = shell_exec('ls -lart');
echo "<pre>$output</pre>"; ?>
</html>
