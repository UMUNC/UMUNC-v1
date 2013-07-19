<div id="box">
	<div style="margin-left:auto;margin-right:auto; width:800px;" >Outbox:
	<ul style="">
	<?php
		$conn = mysql_connect("localhost","root","BabyBibo1117");
		if (!$conn)
			{
				die('Could not connect: ' . mysql_error());
			}	
		mysql_select_db("umunc", $conn);
		$result = mysql_query("SELECT * FROM `core_msg` WHERE `from`=".$_COOKIE["coreid"]."; ");
		
		
		while($row = mysql_fetch_array($result))
			{
	?>
	<li>
	<?php
				$from = $row['from'];
				$to = $row['to'];
				$msg = $row['msg'];
				
				if ($to=="1") {$to="To C.O.R.E : ";} else	
				if ($to=="2") {$to="To China : ";} else	
				if ($to=="3") {$to="To Japan : ";}else
				if ($to=="4") {$to="To Russia : ";}else
				if ($to=="5") {$to="To Europe : ";}else
				if ($to=="6") {$to="To America : ";}else
				if ($to=="7") {$to="To Xinhua : ";}else
				if ($to=="8") {$to="To Yomiuri : ";}else
				if ($to=="9") {$to="To RusNews : ";}else
				if ($to=="10"){$to="To Bild : ";}else
				if ($to=="11"){$to="To Times : ";}else
				if ($to=="12"){$to="To NYTimes : ";}
				
				echo $to.$msg;
	?>
	</li>
	<?php
			}
		mysql_close($conn);

	?>
	</ul></div>
</div>