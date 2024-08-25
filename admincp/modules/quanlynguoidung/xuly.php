<?php  
	include('../../config/config.php');

		$ma = $_POST["id_dangky"];
		$ten = $_POST["tenkhachhang"];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$dienthoai=$_POST['dienthoai'];
		$matkhau=$_POST['matkhau'];

	if(isset($_POST['sua'])){
		$sql= "UPDATE tbl_dangky SET tenkhachhang='$ten',email='$email',diachi='$diachi',dienthoai='$dienthoai',matkhau='$matkhau' WHERE id_dangky='$ma'";
		mysqli_query($conn, $sql);
		header("location:../../index.php?action=quanlynguoidung&query=xem");
	}
	else{
		$ma=$_GET['ma'];
		$sql_xoa="DELETE FROM tbl_dangky WHERE id_dangky='$ma'";
		mysqli_query($conn, $sql_xoa);
		header("location:../../index.php?action=quanlynguoidung&query=xem");
	}
?>