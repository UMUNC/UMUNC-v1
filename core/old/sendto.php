<div id="sendto">
	<?php
		if ($_COOKIE["corestatus"]==1) {
			echo "Send to C.O.R.E";
	?>
		<form method="GET" action="send.php" id="sendform">
			<input type="hidden" name="from" value="<?php echo $_COOKIE["coreid"]; ?>" />
			<input type="hidden" name="to" value="1" />
			<div style="margin:30px"><textarea name="msg" rows="5" cols="38" ></textarea></div>
			<div style="margin:30px"><input class="button" type="submit" value="Send" /></div>
		</form>
	<?php
		} else {
	?>
		<form action="./send.php" method="GET" > 
			<input type="hidden" name="from" value="1" />	
				To:	 <select name="to">
				<option value="2">China</option>
				<option value="3">Japan</option>
				<option value="4">Russia</option>
				<option value="5">Europe</option>
				<option value="6">America</option>
				<option value="7">Xinhua</option>
				<option value="8">Yomiuri</option>
				<option value="9">RusNews</option>
				<option value="10">Bild</option>
				<option value="11">Times</option>
				<option value="12">NYTimes</option>
			</select>
			<div style="margin:30px;"><textarea name="msg" 	rows="5" cols="38"></textarea></div>
			<input class="button" type="submit" value="Send" />			
		</form>
	<?php
		}
	?>
</div>