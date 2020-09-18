<?php 
	$conn= new mysqli('localhost:3307','root','root','ritsolution');

	if($conn->connect_error){
		echo $error=$conn->connect_error;
	}


 ?>