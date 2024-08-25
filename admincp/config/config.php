<?php  
	$conn= new mysqli("localhost","root","","qlbh");
	if($conn->connect_errno){
		echo "looix".$conn->connect_errno;
		exit();
	}
?>