<?php
	$result = mysql_query("SELECT * FROM `talk_record` WHERE `type`=2 ORDER BY id ASC"); 					
	$html='';
	while($row = mysql_fetch_array($result))
		{
       
			$id = $row['id'];
			$role1 = $row['role1'];
			$time = $row['time'];
			$location = $row['location'];
			$about = $row['about'];
			$status = $row['status'];
			if ($status=="0"){
				$check='<div style="color:blue;">Pending</div>';
			} else if ($status=="2") {
				$check='<div style="color:green;">Accepted</div>';
			}	else if ($status=="-2"){
				$check='<div style="color:red;">Rejected</div>';
			}
			
			
			$txt='<tr class="record">';
			
			$txt=$txt.'<td><div class="name">'.getname($role1).'</div></td>';
			$txt=$txt.'<td class="about"><div>'.$about.'</div></td>';
			$txt=$txt.'<td><div class="time">'.$time.'</div></td>';
			$txt=$txt.'<td class="location"><div>'.$location.'</div></td>';
			$txt=$txt.'<td class="status">'.$check.'</td>';
			
			$txt=$txt.'</tr>';
			
			$html = $txt.$html;
       
		}
	$html='<table id="announcement" class="box-table"><tr><th>Host</th><th>Description</th><th>Time</th><th>Location</th><th>Status</th></tr>'.$html."</table>";
	echo $html;
?>