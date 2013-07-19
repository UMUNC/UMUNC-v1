<?php include "../eval/checkeval.php"; ?>
<?php include "./conn/check.php"?>
<?php 
	if ($_COOKIE["prio"]=="0") {
		header("location: ./coreindex.php");
		setcookie("login","false",time()+60*60*24*365,"/",".umunc.net");
		exit();
	}
?>
<!doctype html>

<html>
	<head>
		<title> C.O.R.E @UMUNC </title>
		<link rel="stylesheet" type="text/css" href="./style/style.css" />
		<script src="./scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="./scripts/effect.js" type="text/javascript"></script>
	</head>
	<body>
				<div id="ajax"></div>
		<div id="header">
			<img src="./corelogo.png" alt="Logo" id="logo"/>
		</div>
		<?php include "announce.php"; ?>
		
		<div><a href="review.php" class="button" style="font: bold 16px verdana;">公告(点击此按钮进入)---留下您的感想 @UMUNC</a></div>
		
		<?php
			$i=$_COOKIE["id"];
		?>
			<div style="text-align:left;margin:auto; width:900px; background-color:white; padding: 20px;" >
				<form action="./send.php" method="GET">
					<input type="hidden" name="from" value="<?php echo $i; ?>"/>
					<input type="hidden" name="to" value="1"/>
					<textarea name="msg" rows="5" cols="85" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('formsubmit').click();return false};"></textarea>
					<input id="formsubmit" class="button" type="submit" value="Send(Ctrl+Enter)" style="margin-left:30px;margin-top:10px;margin-bottom:20px; width:150px;"/>
				</form>
				<strong>
					<?php
						if ($i=="2") {echo "With China : ";} else
						if ($i=="3") {echo "With Japan : ";}else
						if ($i=="4") {echo "With Russia : ";}else
						if ($i=="5") {echo "With England : ";}else
						if ($i=="6") {echo "With America : ";}
					?>
				</strong>
				<ul style="list-style:none; ">
					<?php
						$conn = mysql_connect("localhost","root","BabyBibo1117");
						if (!$conn)
							{
								die('Could not connect: ' . mysql_error());
							}	
						mysql_select_db("umunc", $conn);
						
						//$result = mysql_query("SELECT * FROM `core_msg` WHERE `from`=".$i."; OR `to`=".$i.";");
						$result = mysql_query("SELECT * FROM `core_msg` WHERE `from`=".$i." OR `to`=".$i.";"); 
						
						
						$html="";
						while($row = mysql_fetch_array($result))
							{

								$from = $row['from'];
								$to = $row['to'];
								$msg = $row['msg'];
								
								if ($i=="2") {$from ="China : ";} else
								if ($i=="3") {$from ="Japan : ";}else
								if ($i=="4") {$from ="Russia : ";}else
								if ($i=="5") {$from ="England : ";}else
								if ($i=="6") {$from ="America : ";}
								
								if ($to==1) { $color="white";} else { $color="yellow"; $from="CORE : "; }
								
								$html = "<li style='margin-top:30px;'><span style='background-color:$color;'> $from".$msg."</span></li>".$html;

							}
						echo $html;		
					?>
				</ul>
			</div>
		<?php
			
		?>
		
		
		<?php include "footer.php"?>
	
		<a href="./logout.php">Log Out</a>
	</body>
</html>