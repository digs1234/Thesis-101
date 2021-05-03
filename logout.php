<?php
	include "actions/connection.php";
	session_start();
	
	unset ($_SESSION["AID"]);
	unset ($_SESSION["ANAME"]);
	unset ($_SESSION["SID"]);
	unset ($_SESSION["SNAME"]);
	
	session_destroy();
	echo "<script>window.open('index.php','_self');</script>";
?>