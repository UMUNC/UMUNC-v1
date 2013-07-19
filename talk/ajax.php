<?php
		$id=$_COOKIE['id'];
		echo $id;
		$conn = mysql_connect("localhost","root","BabyBibo1117");
		if (!$conn)
			{
				die('Could not connect: ' . mysql_error());
			}	
		mysql_select_db("umunc", $conn);
		
		$cmd="SELECT COUNT(*) AS num FROM talk_record WHERE `type`=1 AND (`role1`='$id' OR `role2`='$id') ";
		$result = mysql_query($cmd);
		
		while($row = mysql_fetch_array($result))
			{
				echo $row['num'];
			}
			
		$cmd="SELECT COUNT(*) AS num FROM talk_record WHERE `type`=2 ";
		$result = mysql_query($cmd);
		
		while($row = mysql_fetch_array($result))
			{
				echo $row['num'];
			}
		
		mysql_close($conn);
?>