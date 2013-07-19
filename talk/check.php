<?php
	include "./conn/conn.php";
	$id = $_GET["id"];	
	$type = $_GET["type"];
	$userid=$_COOKIE["id"];

	function setstatus($type){
		$id = $_GET["id"];	
		$err = mysql_query("UPDATE `talk_record` SET `status`=$type WHERE `id`=$id"); 	
		header("location: ./index.php ");
		exit();
	}

	$result = mysql_query("SELECT * FROM `talk_record` WHERE `id`=$id"); 					
	
	while($row = mysql_fetch_array($result)){
		$role1 = $row['role1'];
		$role2 = $row['role2'];
		
		if ($type=="0") setstatus(-1);
		
		if (getprio($role1)=="2") setstatus(2);
		if (getprio($role2)=="2") setstatus(2);
		setstatus(1);
	}
	
	
?>