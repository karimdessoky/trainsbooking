<?php
	
	$con = mysqli_connect("localhost","root","","cities");
	
	if(mysqli_connect_errno())
	{
		echo "Error occured while connecting with database ".mysqli_connect_errno();
	}

	//session_start();
?>