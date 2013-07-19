<?php include "./conn/check.php"?>
<?php 
	$id=$_COOKIE["id"];
	$user=$_COOKIE["user"];
	$prio=$_COOKIE["prio"];
	
	include "./conn/conn.php";	
	
	if ($_POST["data"]=="true"){
		$role1=$_POST["role1"];
		$role2=$_POST["role2"];
		$type=$_POST["type"];
		$about=addslashes($_POST["about"]);
		$location=addslashes($_POST["location"]);
		$time=addslashes($_POST["time"]);
				
		mysql_query("set names uft8;");

		$sql="INSERT INTO `talk_record` (`role1` , `role2` , `type` , `about` , `location` , `time`)
			VALUES ('$role1','$role2','$type','$about','$location','$time')";	
		$result = mysql_query($sql);
		header("location: ./index.php");
	}
?>
<!doctype html>

<html>
	<head>
		<title> Talk @UMUNC </title>
		<link rel="stylesheet" type="text/css" href="./style/style.css" />
		<script src="./scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="./scripts/effect.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="header">
			<img src="./talklogo.png" alt="Logo" id="logo"/>
		</div>
		<?php include "time.php";?>

		<form action="add.php" method="POST" id="addform">	
			<input type="hidden" value="true" name="data"/>
			<input type="hidden" value="<?php echo $id;?>" name="role1"/>
			
			<div>
				<input type="radio" name="type" value="1" onmousedown="$('#select').show();" checked="true"/> 会谈/采访
				<input type="radio" name="type" value="2" onmousedown="$('#select').hide();"/> 发布会
			</div>
			<div id="select">
				With:	<select name="role2">
							<?php for($i=2;$i<=16;$i++) {?>
								<option value="<?php echo $i; ?>"><?php echo getname($i); ?></option>
							<?php } ?>
						</select>
			</div>
			<div><span class="name" style="margin-right:30px">About:</span><input onmousedown="$(this).attr('value','');" type="text" value="概况（例如 “朝核问题 允许提问”）" name="about" style="width:200px;"/></div>
			<div><span class="name" style="margin-right:7px">Location:</span>
						<select name="location" style="width:200px"> 
							<option value="15楼西 中国内阁">15楼西 中国内阁 </option>
							<option value="18楼西 美国内阁">18楼西 美国内阁 </option>
							<option value="11楼西 日本内阁">11楼西 日本内阁 </option>
							<option value="13楼西 英国内阁">13楼西 英国内阁 </option>
							<option value="16楼西 俄罗斯内阁">16楼西 俄罗斯内阁  </option>
							<option value="5楼南 媒体中心会场">五楼南 媒体中心会场 </option>
						</select>
			</div>
			<div><span class="name" style="margin-right:39px">Time:</span><input onmousedown="$(this).attr('value','');" type="text" value="开始时间（例如 12:25）" name="time" style="width:200px;"/></div>
			<div><input type="submit" value="Submit" class="button"/></div><a href="index.php" class="buttonlink">Back</a>
			
		</form>

		<?php include "footer.php";?>
	
	</body>
</html>