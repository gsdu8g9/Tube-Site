<?php
	// Start headers and sessions
	ob_start();
	
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	$site_path = "/";
	
	// MySQL Connection
	mysql_connect("localhost", "root", "");
	mysql_select_db("tubesite");
	
	$siteName = "LKBits.com";
?>