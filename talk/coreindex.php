<?php include "../eval/checkeval.php"; ?>
<?php 
	include "./conn/check.php";
	include "./conn/conn.php";
	if ($_COOKIE["prio"]!="0") {
		header("location: ./index.php");
		exit();
	}
?>
<!doctype html>

<html>
	<head>
		<title> Talk @UMUNC </title>
		<meta http-equiv="refresh" content="20">
		<link rel="stylesheet" type="text/css" href="./style/style.css" />
		<link rel="stylesheet" type="text/css" href="./style/table/style.css" />
		<script src="./scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="./scripts/effect.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="header">
			<img src="./talklogo.png" alt="Logo" id="logo"/>
		</div>
			
		<?php include "time.php"; ?>	
	
		<h3 style="margin-top:30px;">发布会</h3>
		<?php include "core_announcement.php";?>
		
		<h3 style="margin-top:30px;">会谈/采访</h3>
		<?php include "core_talks.php";?>	
		
		<div style="margin-top:30px;"><a href="add.php" class="buttonlink">Apply New Event</a></div>
		<?php include "footer.php"; ?>
	
		<a href="./logout.php" class="buttonlink">Log Out</a>
	</body>
</html>