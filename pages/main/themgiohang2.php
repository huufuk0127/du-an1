<?php 
	$conn= new mysqli("localhost","root","","qlbh");
	session_start();
	if (isset($_GET['idsp'])) {
		$id=$_GET['idsp'];
	}

	$soluong=(isset($_GET['soluong'])) ? $_GET['soluong'] : 1;
	$action=(isset($_GET['action'])) ? $_GET['action'] : 'add';
	$size=$_GET['size'];
	if($soluong<=0){
		$soluong=1;
	}
	
	//var_dump($action);
	//var_dump($soluong);
	//var_dump($id);
	//die();

	$query=mysqli_query($conn,"SELECT * FROM san_pham WHERE ma_sp='".$id."'");
	if($query){
		$product=mysqli_fetch_assoc($query);
	}
	$item=[
		'ma_sp'=>$product['ma_sp'],
		'ten_sp' =>$product['ten_sp'],
		'size'=>$size,
		'soluong'=>$soluong,
		'don_gia'=>$product['don_gia'],
		'hinh_anh'=>$product['hinh_anh']
	];
	if($action=='add'){
		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]['soluong']+=$soluong;
		}
		else{
			$_SESSION['cart'][$id]=$item;
		}
		
	}
	if($action=='update'){
		$_SESSION['cart'][$id]['soluong']=$soluong;
		
	}
	if($action=='delete'){
		unset($_SESSION['cart'][$id]);	
	}
	//session_destroy();
	header('Location:../../index.php?quanly=giohang');
	echo "<pre>";
	print_r($_SESSION['cart']);
	//them moi

	//cap nhat
	//xoa
 ?>