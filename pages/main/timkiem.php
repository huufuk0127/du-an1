<?php 
    if(isset($_POST['timkiem'])){
        $tukhoa=$_POST['tukhoa'];
    }
	$sql_pro="SELECT * FROM san_pham WHERE san_pham.ten_sp LIKE '%".$tukhoa."%' ";
	$query_pro=mysqli_query($conn,$sql_pro);
?>
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h4>Tìm kiếm cho: <?php echo $tukhoa ?></h4>
        </div>
        <div class="row px-xl-5 pb-3">
<?php 
					while($row=mysqli_fetch_array($query_pro)) {			 	
					?>
					<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinh_anh'] ?>">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <p class="text-truncate mb-3">Tên sản phẩm : <?php echo $row['ten_sp'] ?></p>
                        <div class="d-flex justify-content-center">
                          
                            <p class="text-muted ml-2">Giá: <?php echo number_format($row['don_gia'],0,',','.').'VND'?> </p>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['ma_sp']  ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết sản phẩm</a>
                    </div>
              
    </div></div>
    <?php 
						}
					 ?>
					  </div></div>
       
					