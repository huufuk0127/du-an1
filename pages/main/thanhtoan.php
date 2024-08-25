<?php 
	
	$id_khachhang=$_SESSION['id_khachhang'];
	$code_order=rand(0,9999);
	$insert_cart="INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."','".$code_order."',1)";
	$cart_query=mysqli_query($conn,$insert_cart);
	if($cart_query){
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham=$value['ma_sp'];
			$soluong=$value['soluong'];
			$size=$value['size'];
			$insert_order_details="INSERT INTO tbl_cart_details(code_cart,ma_sp,soluong,size) VALUE('".$code_order."','".$id_sanpham."','".$soluong."','".$size."')";
			mysqli_query($conn,$insert_order_details);
		}
	}
	unset($_SESSION['cart']);
	header('Location: index.php?quanly=camon');
 ?>