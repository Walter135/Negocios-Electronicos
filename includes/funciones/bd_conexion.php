<?php 
	/*$conn= new mysqli('localhost:3307','root','root','gdlwebcamp');*/
	$conn= new mysqli('localhost:3307','root','T3chsyscom','gdlwebcamp');
	if($conn->connect_error){
		echo $error=$conn->connect_error;
	}


 ?>