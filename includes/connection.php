<?php
	//THIS FILE CONTAINS THE INFORMATION TO CONNECT TO THE DATABASE, DO NOT EDIT
	$name = "mae_shop_user";
	$pas = "9PpV8RtGQCCjFDxA";
	$dbname = "databases";
	//ABOVE SETS THE VARIABLES NECESSARY. AGAIN DO NOT EDIT
	//BELOW DOES THE CONNECTING, FOR BOTH MYSQL AND MYSQLI, THIS SYSTEM USES MYSQL. 
	$con = mysqli_connect("localhost",$name,$pas);//IN CASE SOMEONE WANTS TO USE MYSQLI
	//$conm = mysqli_connect("localhost",$name,$pas); 
	mysqli_select_db($con,$dbname);//IN CASE SOMEONE WANTS TO USE MYSQLI
	//mysqli_select_db($dbname,$conm);
	
	?>