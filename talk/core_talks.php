<?php
	$result = mysql_query("SELECT * FROM `talk_record` WHERE `type`=1 ORDER BY id ASC"); 					
	$html='';
	$userid=$_COOKIE["id"];
	while($row = mysql_fetch_array($result))
		{
			$id = $row['id'];
			$role1 = $row['role1'];
			$role2 = $row['role2'];
			//if (($role1!=$userid)&&($role2!=$userid)) continue;
			$apply = $role1==$userid;
			$with = $apply?$role2:$role1;
			
			$time = $row['time'];
			$location = $row['location'];
			$about = $row['about'];
			
			
			$status = $row['status'];
			switch ($status)
				{
					case -2:
						$check='<div style="color:red">Rejected By <strong>C.O.R.E</strong></div>';
						break; 
					case -1:   
						$check='<div style="color:red">Rejected By <strong>'.getname($role2).'</strong></div>';
						break; 
					case 0:    
						$check='<div style="color:blue">Pending For <strong>'.getname($role2).'</strong></div>';
						break; 
					case 1:    
						$check='<div style="color:blue"><a href="./core_check.php?id='.$id.'&type=1" class="buttonlink acc">Accept</a><a href="./core_check.php?id='.$id.'&type=0" class="buttonlink rej">Reject</a></div>';
						break; 
					case 2:    
						$check='<div style="color:green">Accepted</div>';
						break;
				}
			
			
			$txt='<tr class="record">';
			
			$txt=$txt.'<td><div class="name">'.getname($role1).'</div></td>';
			$txt=$txt.'<td><div class="name">'.getname($role2).'</div></td>';
			$txt=$txt.'<td class="about"><div>'.$about.'</div></td>';
			$txt=$txt.'<td><div class="time">'.$time.'</div></td>';
			$txt=$txt.'<td class="location"><div>'.$location.'</div></td>';
			$txt=$txt.'<td class="status">'.$check.'</td>';
			
			$txt=$txt.'</tr>';
			
			$html = $txt.$html;
       
		}
	$html='<table class="box-table" id="talks"><thead><tr><th>Role A</th><th>Role B</th><th>Description</th><th>Time</th><th>Location</th><th>Status</th></tr></thead><tbody>'.$html."</tbody></table>";
	echo $html;
?>