<?php 
	if ($_GET["target"]=="mpc"){
		setcookie("eval","true",time()+60*60*1,"/",".umunc.net");
		header("location: http://mpc.umunc.net");
		exit();
	}
	if ($_GET["target"]=="core"){
		echo "暂不开放";
		exit();
	}
	if ($_GET["target"]=="talk"){
		setcookie("eval","true",time()+60*60*1,"/",".umunc.net");
		setcookie("clogin","pass",time()+60*60*1,"/",".umunc.net");
		setcookie("id","1",time()+60*60*1,"/",".umunc.net");
		setcookie("user","CORE	",time()+60*60*1,"/",".umunc.net");
		setcookie("prio","0",time()+60*60*1,"/",".umunc.net");
		header("location: http://talk.umunc.net");
		exit();
	}
?>