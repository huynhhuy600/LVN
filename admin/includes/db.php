<?php 
	
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$databaseName = 'db';
	$db = new mysqli($hostname,$username,$password,$databaseName);
	
	if($db->connect_errno) {
		
		echo "PLEASE BEAR WITH US AS WE ARE CURRENTLY WORKING ON OUR SITE!!!! PLEASE COME BACK LATER";
		
	}
	
	
?>