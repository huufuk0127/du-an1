
<div >
	<?php 
		if(isset($_GET['action']) && $_GET['query']){
			$tam=$_GET['action'];
			$query=$_GET['query'];
		}
		else{
			$tam='';
			$query='';
		}
		if($tam=='quanlyloai'&& $query=='them'){
			include("modules/quanlyloai/lietke.php");
		}
		else if($tam=='quanlysp'&& $query=='them'){
			
			include("modules/quanlysp/lietke.php");
		}
		else if($tam=='quanlysp'&& $query=='themsp'){
			include("modules/quanlysp/them.php");
		}
		else if($tam=='quanlysp' && $query=='sua'){
			include("modules/quanlysp/sua.php");
		}
		else if($tam=='quanlydonhang' && $query=='lietke'){
			include("modules/quanlydonhang/lietke.php");
		}
		else if($tam=='donhang' && $query=='xemdonhang'){
			include("modules/quanlydonhang/xemdonhang.php");
		}
		else if($tam=='quanlylienhe' && $query=='xem'){
			include("modules/quanlylienhe/quanlylienhe.php");
		}
		else if($tam=='quanlynguoidung' && $query=='xem'){
			include("modules/quanlynguoidung/quanlynguoidung.php");
		}
		else if($tam=='quanlynguoidung' && $query=='sua'){
			include("modules/quanlynguoidung/sua.php");
		}
		else{
			include("modules/thongke2.php");
			include("modules/dashboard.php");

		}
	?>
</div>
