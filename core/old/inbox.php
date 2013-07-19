<div id="box">
	<div style="margin-left:auto;margin-right:auto; width:800px;" >Inbox:
	<ul style="" >
	<?php
		$conn = mysql_connect("localhost","root","BabyBibo1117");
		if (!$conn)
			{
				die('Could not connect: ' . mysql_error());
			}	
		mysql_select_db("umunc", $conn);
		$result = mysql_query("SELECT * FROM `core_msg` WHERE `to`=".$_COOKIE["coreid"]."; ");
		
		
		while($row = mysql_fetch_array($result))
			{
	?>
	<li>
	<?php
				$from = $row['from'];
				$to = $row['to'];
				$msg = $row['msg'];
				
				if ($from=="1") {$from="From C.O.R.E : ";} else
				if ($from=="2") {$from="From China : ";} else
				if ($from=="3") {$from="From Japan : ";}else
				if ($from=="4") {$from="From Russia : ";}else
				if ($from=="5") {$from="From Europe : ";}else
				if ($from=="6") {$from="From America : ";}else
				if ($from=="7") {$from="From Xinhua : ";}else
				if ($from=="8") {$from="From Yomiuri : ";}else
				if ($from=="9") {$from="From RusNews : ";}else
				if ($from=="10"){$from="From Bild : ";}else
				if ($from=="11"){$from="From Times : ";}else
				if ($from=="12"){$from="From NYTimes : ";}
				
				echo $from.$msg;
	?>
	</li>
	<?php
			}
		mysql_close($conn);

	?>
	</ul>
	</div>
</div>