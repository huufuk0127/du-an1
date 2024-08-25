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
	$sql_pro="SELECT * FROM san_pham,loai WHERE san_pham.ma_loai=loai.ma_loai ORDER BY san_pham.ma_sp DESC LIMIT $begin,8";
	$query_pro=mysqli_query($conn,$sql_pro);

?>
<div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
        	 <div class="col-lg-9">
			<div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" style="margin-left: 180px;">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="images/Bia.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Thời trang và phong cách</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashion Lifestyle</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="images/Bia1.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Những bộ sưu tập độc đáo</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashion Lifestyle</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;margin-left: 400px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;margin-left: 320px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Chất lượng cao</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Miễn phí vận chuyển</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Đổi trả trong 14 ngày</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hỗ trợ 24/7</h5>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Sản phẩm mới nhất</span></h2>
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
       
					 <?php 
					$sql_trang=mysqli_query($conn,"SELECT * FROM san_pham");
					$row_count= mysqli_num_rows($sql_trang);
					$trang=ceil($row_count/8);
				 ?>
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
				<ul class="list_trang">
					<?php 
						for ($i=1; $i <= $trang; $i++) { 
					 ?>
					<li <?php if($i==$page){ echo 'style="background-color: #e3e3e3;"';} else{ echo '';} ?>>
						<a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a>
					</li>
					<?php 
						}
					 ?>
				</ul>