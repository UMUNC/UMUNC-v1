<?php
	$from=$_GET["from"]; echo $from;
	$to=$_GET["to"]; echo $to;
	$msg=addslashes($_GET["msg"]); echo $msg;
	
	$conn = mysql_connect("localhost","root","BabyBibo1117");
	if (!$conn)
 	 	{
 		 	die('Could not connect: ' . mysql_error());
  		}	

  	mysql_select_db("umunc", $conn);
	mysql_query("set names uft8;");

	$sql="INSERT INTO `core_msg` (`from` , `to` , `msg`)
		VALUES ('$from','$to','$msg')";	

	$result = mysql_query($sql);
	
	mysql_close($conn);
	
	if ($from==1) {header("location: ./coreindex.php ");exit();}
	header("location: ./index.php ");
?>
