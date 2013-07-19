<?php
						$conn = mysql_connect("localhost","root","BabyBibo1117");
						if (!$conn)
							{
								die('Could not connect: ' . mysql_error());
							}	
						mysql_select_db("umunc", $conn);
						
						//$result = mysql_query("SELECT * FROM `core_msg` WHERE `from`=".$i."; OR `to`=".$i.";");
						$result = mysql_query("SELECT * FROM `2012review`;"); 
						
						
						$html="";
						while($row = mysql_fetch_array($result))
							{

								$msg = $row['content'];						
								$html = "<li style='margin-top:30px;'>$msg</li>".$html;

							}
						echo $html;		
					?>