<?php 
	if (isset($_GET['trang'])) {
		$page=$_GET['trang'];
	}else{
		$page='';
	}
	if ($page==''||$page==1) {
		$begin=0;
	}else{
		$begin=($page*8)-8;
	}
	$conn= new mysqli("localhost","root","","qlbh");
	$sql_pro="SELECT * FROM san_pham WHERE san_pham.ma_loai='$_GET[id]' ORDER BY san_pham.ma_sp DESC LIMIT $begin,8";
	$query_pro=mysqli_query($conn,$sql_pro);
	$sql_cate="SELECT * FROM loai WHERE loai.ma_loai='$_GET[id]' LIMIT 1";
	$query_cate=mysqli_query($conn,$sql_cate);
	$row_title= mysqli_fetch_array($query_cate);

?>
	<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2"><?php echo $row_title['ten_loai']; ?></span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
<?php 
					while($row=mysqli_fetch_array($query_pro)) {
					$loai=$row['ma_loai'];			 	
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
       
					</ul>
				<div style="clear:both;"></div>
				<style type="text/css">
					ul.list_trang {
				    padding: 0;
				   	margin-left: 40%;
				    list-style: none;
					}
					ul.list_trang li {
				    float: left;
				    padding: 5px 15px;
				    margin: 4px;
				    display: block;
					}
					ul.list_trang li a {
				    text-decoration: none;
				    display: block;
				    color: #665f5f;
    				font-size: 20px;
					}
				</style>
				<?php 
					$sql_trang=mysqli_query($conn,"SELECT * FROM san_pham WHERE san_pham.ma_loai='$_GET[id]'");
					$row_count= mysqli_num_rows($sql_trang);
					$trang=ceil($row_count/8);
				 ?>
				<ul class="list_trang">
					<?php 
						for ($i=1; $i <= $trang; $i++) { 
					 ?>
					<li <?php if($i==$page){ echo 'style="background-color: #e3e3e3;"';} else{ echo '';} ?>>
						<a href="index.php?quanly=danhmucsp&id=<?php echo $loai  ?>&trang=<?php echo $i ?>"><?php echo $i ?></a>
					</li>
					<?php 
						}
					 ?>
				</ul>