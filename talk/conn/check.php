<?php
	if ($_COOKIE["clogin"]!="pass") {
		header("location: ./login.php ");
		exit();
	}
?>