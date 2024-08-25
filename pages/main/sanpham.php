
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Chi tiết sản phẩm</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Chi tiết sản phẩm</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<?php 
	$sql_chitiet="SELECT * FROM san_pham,loai WHERE san_pham.ma_loai=loai.ma_loai AND san_pham.ma_sp = '$_GET[id]' LIMIT 1";
	$query_chitiet=mysqli_query($conn,$sql_chitiet);
	while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
 ?>

<form action="pages/main/themgiohang2.php?idsp=<?php echo $row_chitiet['ma_sp'] ?>&action='add'">

    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinh_anh'] ?>" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">Tên sản phẩm: <?php echo $row_chitiet['ten_sp'] ?></h3>
                <h3 class="font-weight-semi-bold mb-4"><?php echo number_format($row_chitiet['don_gia'],0,',','.').'VND' ?></h3>
                <p class="mb-4">Chất liệu: <?php echo $row_chitiet['chat_lieu'] ?></p>
                <div class="d-flex mb-3">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:
                    <select name="size">
                         <option value="S">S</option>
                         <option value="M">M</option>
                         <option value="L">L</option>
                    </select>
                    </p>
                </div>
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        
                        <input class="form-control bg-secondary text-center" type="number" name="soluong" value="1">
                        <input type="hidden" name="idsp" value="<?php echo $row_chitiet['ma_sp'] ?>">
                    </div>
                    <i class="fa fa-shopping-cart mr-1"></i> 
                    <input class="btn btn-primary px-3" name="themgiohang" type="submit" value="Thêm giỏ hàng">
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Chia sẻ:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div></form>
       
 <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Mô tả sản phẩm</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Đánh giá (0)</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Đặc tính nổi bật</h4>
                        <p><?php echo $row_chitiet['mo_ta'] ?></p>
                    </div>
                    
                       <?php 
}
 ?>  
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">                            
                            <div class="col-md-6">
                                <h4 class="mb-4">Đánh giá sản phẩm</h4>
                                <small>Địa chỉ Email của bạn sẽ được ẩn </small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Đánh giá * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Viết đánh giá *</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Họ và tên *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Đánh giá" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    