<?php
	setcookie("clogin","false",time()+60*60*24*365,"/",".umunc.net");
	header("location: ./index.php ");
?>