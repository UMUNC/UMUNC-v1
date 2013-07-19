<?php include "../eval/checkeval.php"; ?>
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
			<p>今天下午的议程中，由于长时间的高负荷访问，服务器自动屏蔽了吉华大厦的IP地址，影响了会议的正常进行，UMUNC团队表示由衷的歉意。</p>
			<p>我们将在会议结束后5天内开放UMUNC后台的全部访问权限，可以看到UMUNC2012的危机主线、过程中所有内阁与CORE的交流过程，以及所有的会谈情况，为大家对此次会议的进一步分析提供方便</p>
			<p>请您在此留下您对UMUNC2012的看法，感谢您的留言！</p>
			<p>如果您还有任何问题，欢迎发邮件至core@umunc.net</p>
			
			<strong><p>应大量代表要求，会议平台会在两日内开放后台权限，会议的相关分析也将在本周放出，请大家耐心等待！</p></strong>
			
		</div>
		<form id="loginform" method="POST" id="loginform">
			<div><textarea name="content" cols="100" rows="20"></textarea></div>
			<input type="hidden" name="posted" value="true" />
			<div><input type="submit" value="Submit" class="button"/></div>
		</form>
		<?php include "./footer.php" ?>
	</body>
</html>