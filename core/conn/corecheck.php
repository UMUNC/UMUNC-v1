<?php
	if ($_COOKIE["clogin"]!="pass"){
		header("location: ./login.php ");
		exit();
	}
	if ($_COOKIE["prio"]!="0") {
		header("location: ./login.php ");
		exit();
	}
?>