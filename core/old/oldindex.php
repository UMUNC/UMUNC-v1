<?php include "./conn/check.php"?>
<?php 
	if ($_COOKIE["coreid"]=="1") {
		header("location: ./coreindex.php");
		exit();
	}
?>
<!doctype html>

<html>
	<head>
		<title> C.O.R.E @UMUNC </title>
		<link rel="stylesheet" type="text/css" href="./style/style.css" />
	</head>
	<body>
		<div id="header">
			<img src="./corelogo.png" alt="Logo" id="logo"/>
		</div>
			
		<?php include "announce.php"; ?>
		
		<?php include "outbox.php" ?>
		
		<?php include "inbox.php" ?>
		
		
		<?php include "sendto.php" ?>
		
		<?php include "footer.php"?>
	
		<a href="./logout.php">Log Out</a>
	</body>
</html>