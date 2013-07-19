<!doctype html>
<html>
	<head>
		<title> C.O.R.E Modify </title>
		<link rel="stylesheet" type="text/css" href="./style/login_style.css" />
	</head>
	<body>
<?php
	$id=$_COOKIE["id"];
	setcookie("clogin","false",time()+60*60*1,"/",".umunc.net");
	if ($_POST["posted"]=="true"){
		
		$conn = mysql_connect("localhost","root","BabyBibo1117");
		if (!$conn)
			{
				die('Could not connect: ' . mysql_error());
			}	
		mysql_select_db("umunc", $conn);
		if ($id!=0)
		$result = mysql_query("UPDATE `user` SET pwd='".$_POST["password"]."' WHERE `id`='$id'; ");
		header("location: ./login.php ");
		
		mysql_close($conn);
	}
?>
		<div id="header">
			<img src="./corelogo.png" alt="Logo" id="logo"/>
		</div>
		<form id="pwdform" method="POST" id="pwdform">
			<div>Password: <input  class="input" type="password" name="password" id="password"/></div>
			<input type="hidden" name="posted" value="true" />
			<div><input type="submit" value="Modify" class="button"/></div>
		</form>
		<?php include "./footer.php" ?>
	</body>
</html>