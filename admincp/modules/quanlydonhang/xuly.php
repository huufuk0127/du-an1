<?php 
	include('../../config/config.php');
	if (isset($_GET['code'])) {
		$code=$_GET['code'];
		$sql =mysqli_query($conn,"UPDATE tbl_cart SET cart_status=0 WHERE code_cart='".$code."'");
		header('Location: ../../index.php?action=quanlydonhang&query=lietke');
	}
	else{
		$ma=$_GET['ma'];
		$sql_xoa="DELETE FROM tbl_cart WHERE code_cart='$ma'";
		mysqli_query($conn, $sql_xoa);
		header('Location: ../../index.php?action=quanlydonhang&query=lietke');
	}
 ?>