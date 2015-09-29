<?php 
	//Connect to MySQL
	$conn = mysqli_connect("localhost","root","admin","shoutbox");

	//Test Connection
	if(mysqli_connect_errno()){
		echo 'Failed to connect to MySQL: '.mysqli_connect_error();
	}
	
?>