<!doctype html>
<html>
	<head>
		<title> Review @UMUNC </title>
		<link rel="stylesheet" type="text/css" href="./style/login_style.css" />
	</head>
	<body>
<?php
	if ($_POST["posted"]=="true"){
		$content=addslashes($_POST["content"]);
		
		$conn = mysql_connect("localhost","root","BabyBibo1117");
		if (!$conn)
			{
				die('Could not connect: ' . mysql_error());
			}	
		mysql_select_db("umunc", $conn);
		$result = mysql_query("INSERT INTO `2012review`(content) VALUES('$content')");
		
		mysql_close($conn);
	}
?>
		<div id="header">
			<img src="./corelogo.png" alt="Logo" id="logo" width="500"/>
		</div>
		<div>
			<p>请您在此留下您对UMUNC2012的看法，感谢您的留言！</p>
			<p>如果您还有任何问题，欢迎发邮件至core@umunc.net</p>
		</div>
		<form id="loginform" method="POST" id="loginform">
			<div><textarea name="content" cols="100" rows="20"></textarea></div>
			<input type="hidden" name="posted" value="true" />
			<div><input type="submit" value="Submit" class="button"/></div>
		</form>
		<?php include "./footer.php" ?>
	</body>
</html>