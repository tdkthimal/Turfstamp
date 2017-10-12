<?php

//http://uranus.chrysocome.net/linux/php/passwords.htm 
//How to save password safely in web
	function getConnection(){
		$con=mysqli_connect("localhost","root","","Turfstamp"); //connection string
		if ($con->connect_error) {
	    	die("Connection failed: " . $con->connect_error);
		}else{
			return $con;
		}
	}

	function closeConnection($con){
		mysqli_close($con);
	}
	
?>