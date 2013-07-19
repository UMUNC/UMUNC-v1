<?php
	$conn = mysql_connect("localhost","root","BabyBibo1117");
	if (!$conn)
		{
			die('Could not connect: ' . mysql_error());
		}	

	mysql_select_db("umunc", $conn);
	
	function getname($id){
		$result = mysql_query("SELECT * FROM `user` WHERE `id`=$id;"); 
        
		while($row = mysql_fetch_array($result))
			{
				return $row["user"];
			}
	}
	function getprio($id){
		$result = mysql_query("SELECT * FROM `user` WHERE `id`=$id;"); 
        
		while($row = mysql_fetch_array($result))
			{
				return $row["prio"];
			}
	}
?>