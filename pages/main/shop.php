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
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">PAM Clothing and More</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">PAM C&M</p>
            </div>
        </div>
</div>
<div>
    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1 style="font-style: italic; color: white;">VỀ PAM</h1>
                    <p  style="font-style: italic; color: black; text-align: justify;">
                        Chào mừng đến với Pam Clothing and More – nơi mang đến cho bạn những trải nghiệm thời trang cao cấp đáng nhớ. Chúng tôi tự hào là một hãng thời trang độc đáo, nổi bật với sự tinh tế, sáng tạo và chất lượng hàng đầu.</br>
                        </br>
                        PAM C&M không chỉ đơn thuần là một thương hiệu thời trang, mà còn là một phong cách sống. Chúng tôi tin rằng thời trang không chỉ là về việc mặc những bộ cánh đẹp mắt, mà còn là cách thể hiện cá nhân, phản ánh cái tôi và tạo dựng niềm tin trong bản thân. </br>    
                        </br>
                        Nếu bạn đang tìm kiếm một hãng thời trang cao cấp với sự tinh tế và sáng tạo, hãy đến với Pam Clothing and More. Chúng tôi cam kết mang đến cho bạn những trang phục độc đáo, sang trọng và phong cách để bạn tỏa sáng và thể hiện cái tôi của mình.</br>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="images/VePam.png" alt="Về PAM" style="width: 300px; height: 300px;">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">CHĂM SÓC KHÁCH HÀNG</h1>
                <p>
                    SỰ hài lòng của Khách hàng là...
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Miễn phí vận chuyển</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Đổi trả trong vòng 14 ngày</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">Ưu đãi giảm giá</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                    <h2 class="h5 mt-4 text-center">Phục vụ 24/7</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
</div>
