<?php include "../eval/checkeval.php"; ?>
<?php 
	include "./conn/corecheck.php";
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
		<div id="header">
			<img src="./corelogo.png" alt="Logo" id="logo"/>
		</div>
			
		<?php include "announce.php"; ?>
		
		<?php
			for ($i = 2; $i <= 6; $i++) {
		?>
			<div style="text-align:left;margin-left:15px;margin-right:15px; width:200px; float:left; background-color:white;" >
				<form action="./send.php" method="GET">
					<input type="hidden" name="from" value="1"/>
					<input type="hidden" name="to" value="<?php echo $i; ?>"/>
					<textarea name="msg" rows="5" cols="23" ></textarea>
					<input class="button" type="submit" value="Send" style="margin-left:30px;margin-top:10px;margin-bottom:20px;"/>
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
								
								if ($to==1) { $color="yellow";} else { $color="white"; $from="CORE : "; }
								
								$html = "<li style='margin-top:30px;'><span style='background-color:$color;'> $from".$msg."</span></li>".$html;

							}
						echo $html;
						mysql_close($conn);
				
					?>
				</ul>
			</div>
	
		<?php
			}
		?>
		
		
		<?php include "footer.php"?>
	
		<a href="./logout.php">Log Out</a>
	</body>
</html>