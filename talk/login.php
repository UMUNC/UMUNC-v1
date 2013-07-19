<!doctype html>
<html>
	<head>
		<title> Talk & Communicate Login </title>
		<link rel="stylesheet" type="text/css" href="./style/login_style.css" />
	</head>
	<body>
<?php
	setcookie("clogin","false",time()+60*60*24*365,"/",".umunc.net");
	if ($_POST["posted"]=="true"){
		
		$conn = mysql_connect("localhost","root","BabyBibo1117");
		if (!$conn)
			{
				die('Could not connect: ' . mysql_error());
			}	
		mysql_select_db("umunc", $conn);
		$result = mysql_query("SELECT * FROM `user` WHERE `user`='".$_POST["user"]."'; ");
		
		$password='#';
		while($row = mysql_fetch_array($result))
			{
				$id = $row['id'];
				$user = $row['user'];
				$password = $row['pwd'];
				$prio = $row['prio'];
			}
		
		mysql_close($conn);
		
		if ($_POST["password"]==$password){
			setcookie("clogin","pass",time()+60*60*24*365,"/",".umunc.net");
			setcookie("id","$id",time()+60*60*24*365,"/",".umunc.net");
			setcookie("user","$user",time()+60*60*24*365,"/",".umunc.net");
			setcookie("prio","$prio",time()+60*60*24*365,"/",".umunc.net");
			//if ($id==1) {header("location: ./coreindex.php ");exit();}
			
			header("location: ./index.php ");
		} else {
			echo "<div style='margin:20px; color:red; font: bold 13px verdana;'><strong>Wrong Password!</strong></div>";
		}
	}
?>
		<div id="header">
			<img src="./talklogo.png" alt="Logo" id="logo" width="500"/>
		</div>
		<form id="loginform" method="POST" id="loginform">
			<div>User: <input class="input" style="margin-left: 50px; "type="text" name="user" id="user"/></div>
			<div>Password: <input  class="input" type="password" name="password" id="password"/></div>
			<input type="hidden" name="posted" value="true" />
			<div><input type="submit" value="Log In" class="button"/></div>
		</form>
		<?php include "./footer.php" ?>
	</body>
</html>