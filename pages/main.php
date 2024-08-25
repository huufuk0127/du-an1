
				<?php  
				if(isset($_GET['quanly'])){
					$tam=$_GET['quanly'];
				}
				else{
					$tam='';
				}
				if($tam=='danhmucsp'){
					include("main/danhmucsp.php");
				}
				else if($tam=='sanpham'){
					include("main/sanpham.php");
				}
				else if($tam=='danhsachsanpham'){
					include("main/danhsachsanpham.php");
				}
				else if($tam=='sanphambanchay'){
					include("main/sanphambanchay.php");
				}
				else if($tam=='giohang'){
					include("main/giohang.php");
				}
				else if($tam=='shop'){
					include("main/shop.php");
				}
				else if($tam=='lienhe'){
					include("main/lienhe.php");
				}
				else if($tam=='dangky'){
					include("main/dangky.php");
				}
				else if($tam=='quenmatkhau'){
					include("main/quenmatkhau.php");
				}
				else if($tam=='dangnhap'){
					include("main/dangnhap.php");
				}
				else if($tam=='timkiem'){
					include("main/timkiem.php");
				}
				else if($tam=='thanhtoan'){
					include("main/thanhtoan2.php");
				}
				else if($tam=='dathang'){
					include("main/dathang.php");
				}
				else if($tam=='camon'){
					include("main/camon.php");
				}
				else if($tam=='thaydoimatkhau'){
					include("main/thaydoimatkhau.php");
				}
				else{
					include("main/index.php");
				}
				?>
