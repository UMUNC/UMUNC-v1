<?php
	if ($_COOKIE["corelogin"]!="pass"){
		header("location: ./login.php ");
		exit();
	}
	if ($_COOKIE["coreid"]!="1") {
		header("location: ./login.php ");
		exit();
	}
?>