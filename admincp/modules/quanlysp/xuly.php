<?php  
	include('../../config/config.php');
		$ma = $_POST["ma"];
		$tensp = $_POST["tensp"];
		$cl = $_POST["cl"];
		$size = $_POST["size"];
		$dg = $_POST["dg"];
		$slg = $_POST["slg"];
		$mota = $_POST["mota"];
		$hinhanh = $_FILES['hinhanh']['name'];
		$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
		$hinhanh_time = time().'_'.$hinhanh;
		$loai = $_POST["loai"];

	
	if(isset($_POST['submit'])){
		$sql= "INSERT INTO san_pham VALUES ('$ma','$tensp','$cl','$size','$dg','$slg','$mota','$hinhanh_time','$loai')";
		mysqli_query($conn, $sql);
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh_time);
		header("location:../../index.php?action=quanlysp&query=themsp");
	}
	else if(isset($_POST['sua'])){
		if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh_time);
		
		$sql_update= "UPDATE san_pham SET ma_sp='$ma', ten_sp='$tensp',chat_lieu='$cl',size='$size',don_gia='$dg',so_luong='$slg',mo_ta='$mota',hinh_anh='$hinhanh_time',ma_loai='$loai' WHERE ma_sp='$_GET[masp]'";

		$sql= "SELECT * FROM san_pham WHERE ma_sp='$_GET[masp]' LIMIT 1";
		$query=mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('uploads/'.$row['hinh_anh']);
		}
		}
		else{
			$sql_update= "UPDATE san_pham SET ma_sp='$ma', ten_sp='$tensp',chat_lieu='$cl',size='$size',don_gia='$dg',so_luong='$slg',mo_ta='$mota',ma_loai='$loai' WHERE ma_sp='$_GET[masp]'";
		}
		mysqli_query($conn, $sql_update);
		header("location:../../index.php?action=quanlysp&query=them");
	}
	else{
		$masp= $_GET['masp'];
		$sql= "SELECT * FROM san_pham WHERE ma_sp='$masp' LIMIT 1";
		$query=mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('uploads/'.$row['hinh_anh']);
		}
		$sql_xoa= "DELETE FROM san_pham WHERE ma_sp='$masp'";
		mysqli_query($conn, $sql_xoa);
		header("location:../../index.php?action=quanlysp&query=them");
	}
?>