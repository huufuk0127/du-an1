<?php 
    session_start();
    $cart=(isset($_SESSION['cart']))? $_SESSION['cart'] : []; ?>
<div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="index.php?quanly=lienhe">Liên hệ</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Trợ giúp</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Page</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
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
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold">
                        <img src="images/PamClothingLogo.png" alt="logo" style="width: 150px; height: 150px;"/>
                </h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="index.php?quanly=timkiem" method="POST">
                    <div class="input-group">
                        <input type="text" name="tukhoa" class="form-control" placeholder="Tìm kiếm">
                        <div class="input-group-append">
                         <button class="input-group-text bg-transparent text-primary" type="submit" name="timkiem">
                                <i class="fa fa-search"></i>
                         </button>         
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="index.php?quanly=giohang" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">(<?php echo count($cart) ?>)</span>
                </a>
            </div>
        </div>
    </div>