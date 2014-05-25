<?php
include ($_SERVER['DOCUMENT_ROOT']."/config.php");


function print_category($category, $categorydisplayname) {

	global $pluginspath,$lang;
	$applist[]="";
        $counter=0;
	$dir = opendir($pluginspath);
	while(gettype($name=readdir($dir))!=boolean)
	{
 		
 		if($name == "."|| $name == "..");
 		else { 
  			$_plugindir = $pluginspath.$name."/"; 
			$_pluginconfig=$_plugindir."plugin.php";
  			if(is_dir($_plugindir) && file_exists($_pluginconfig)) {
				include ($_pluginconfig);
				if ($plugin_category == $category) {
				$applist[$counter]=$name;
				$counter=$counter+1;
				}
			}
		}
	
 
	}
 	
	closedir($dir);
	if ($applist[0] == "")return;
	echo '<center><b>'.$categorydisplayname.'</b><br><br><table frame="void" style = "border-collapse: collapse; text-align: left; width: 450px;" CELLPADDING="10" >';
	
	


for ( $i = 0; $i < count($applist); $i+=2 ) {
	include ($pluginspath.$applist[$i]."/plugin.php");
	echo '<tr> <td>'.'<a  target="main" style = "text-decoration: none; color: '. $textcolor .'"href="'.$pluginspath_client.$applist[$i].'"><img border="0" src="'.$plugin_icon.'" width="48" height="48" align="left"><p>&nbsp;&nbsp;'.$plugin_name[LANG].'</p></a>'."</td>";
	if ($i+1 >= count($applist) && count($applist)%2 != 0) break;
	include ($pluginspath.$applist[$i+1]."/plugin.php");
	echo '<td>'.'<a target="main" style = "text-decoration: none; color: '. $textcolor .'"href="'.$pluginspath_client.$applist[$i+1].'"><img border="0" src="'.$plugin_icon.'" width="48" height="48" align="left"><p>&nbsp;&nbsp;'.$plugin_name[LANG].'</p></a>'."</td></tr>";
	}
echo "</table> </center>";
}




?>







<html>




<?php print_category("settings",$lang['settings']); ?>
<?php print_category("system",$lang['system']); ?>
<?php print_category("tools",$lang['tools']); ?>





</html>
