<?php
   $hostname = "localhost";
   $database = "stream";
   $username = "seth";
   $password = "PassW0rd3";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
