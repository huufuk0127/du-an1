<?php
ob_start();
	$sql_loai="SELECT * FROM loai";
	$query_loai=mysqli_query($conn,$sql_loai);
    //session_start();
    $cart=(isset($_SESSION['cart']))? $_SESSION['cart'] : [];
  
    if (isset($_GET['dangxuat'])&&($_GET['dangxuat']==1)){
        unset($_SESSION['dangky']);
    }
ob_flush();
?>
<div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Danh mục</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 120px">
                        <?php  
							while ($row_loai=mysqli_fetch_array($query_loai)) {								
						?>
							<a class="nav-item nav-link" href="index.php?quanly=danhmucsp&id=<?php echo $row_loai['ma_loai']  ?>"><?php echo $row_loai['ten_loai'] ?></a>
						<?php 
							}
						 ?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">
                        <img src="images/PamClothingLogo.png" alt="logo" style="width: 150px; height: 150px;"/>
                    </h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sản phẩm</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                <a class="dropdown-item" href="index.php?quanly=danhsachsanpham">Tất cả sản phẩm</a>
                                <a href="index.php?quanly=sanphambanchay" class="dropdown-item">Sản phẩm bán chạy</a>
                                <a href="index.php?quanly=danhsachgiamgia" class="dropdown-item">Sản phẩm giảm giá</a>
                                </div>
                            </div>
                            <a href="index.php?quanly=shop" class="nav-item nav-link">Về PAM</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mua sắm</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                <a class="dropdown-item" href="index.php?quanly=giohang">Giỏ hàng (<?php echo count($cart) ?>)</a>
                                <a href="index.php?quanly=thanhtoan" class="dropdown-item">Thanh toán</a>
                                <a href="index.php?quanly=lichsumuahang" class="dropdown-item">Lịch sử mua hàng</a>
                                </div>
                            </div>
                            <a href="index.php?quanly=lienhe" class="nav-item nav-link">Liên hệ</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                        <?php 
                        if(isset($_SESSION['dangky'])){
                            ?>
                           <a href="index.php?dangxuat=1" class="nav-item nav-link">Đăng xuất</a>
                           <a href="index.php?quanly=thaydoimatkhau" class="nav-item nav-link">Đổi mật khẩu</a>
                        <?php 
                        }else{
                        ?>
                           <a href="index.php?quanly=dangky" class="nav-item nav-link">Đăng ký</a>
                            <a href="index.php?quanly=dangnhap" class="nav-item nav-link">Đăng nhập</a>

                        <?php         
                        }
                        ?>                       
                        </div>
                    </div>
                </nav>
                </div>
            </div>
        </div>
</div>


   