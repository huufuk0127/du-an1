<?php  
	include('../../config/config.php');
		$ma =$_POST["ma"];
		$ten= $_POST["ten"];
	if(isset($_POST['submit'])){
		$sql= "INSERT INTO loai VALUES ('$ma','$ten')";
		mysqli_query($conn, $sql);
		header("location:../../index.php?action=quanlyloai&query=them");
	}
	else if(isset($_POST['sua'])){
		$sql= "UPDATE loai SET ten_loai='$ten' WHERE ma_loai='$_GET[maa]'";
		mysqli_query($conn, $sql);
		header("location:../../index.php?action=quanlyloai&query=them");
	}
	else{
		$ma=$_GET['ma'];
		$sql_xoa="DELETE FROM loai WHERE ma_loai='$ma'";
		mysqli_query($conn, $sql_xoa);
		header("location:../../index.php?action=quanlyloai&query=them");
	}
?>