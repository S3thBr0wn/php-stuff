<?php
function showerror()
	{	
		//die("<h1>Input error. . Return to <a href = http://10.183.0.0/> HOME</a>");
		die("Input error. .".mysql_errno(). " : ".mysql_error());
	}
?>
