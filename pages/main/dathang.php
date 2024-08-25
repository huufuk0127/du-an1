<p>Đặt hàng</p>
<?php 	
	$id_khachhang=$_SESSION['id_khachhang'];
	$hoten=$_POST['hoten'];
	$email=$_POST['email'];
	$sdt=$_POST['sdt'];
	$diachi=$_POST['diachi'];
	$ghichu=$_POST['ghichu'];
	$code_order=rand(0,9999);
	$datetime=date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d H:i:s');

	$insert_cart="INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,ngaydat) VALUE('".$id_khachhang."','".$code_order."',1,'".$datetime."')";
	
	$cart_query=mysqli_query($conn,$insert_cart);
	
	if($cart_query){
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham=$value['ma_sp'];
			$soluong=$value['soluong'];
			$size=$value['size'];
			$insert_order_details="INSERT INTO tbl_cart_details(code_cart,ma_sp,soluong,size_mua) VALUE('".$code_order."','".$id_sanpham."','".$soluong."','".$size."')";
			mysqli_query($conn,$insert_order_details);
		}
		$insert_shipping="INSERT INTO tbl_shipping(ma_donhang,hoten,sdt,email_nhan,diachi_nhan,ghichu,id_dangky) VALUE('".$code_order."','".$hoten."','".$sdt."','".$email."','".$diachi."','".$ghichu."','".$id_khachhang."')";
		$ship_query=mysqli_query($conn,$insert_shipping);
	}
	unset($_SESSION['cart']);
	header('Location: index.php?quanly=camon');
 ?>