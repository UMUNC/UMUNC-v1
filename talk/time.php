<div id="time">
	<?php echo "Welcome, ".$_COOKIE["user"]."!" ?> 
	<br /><br />
	<strong>
	<?php
		date_default_timezone_set("PRC");
		echo date("Y-m-d H:i:s");
	?> 
	</strong>
</div>