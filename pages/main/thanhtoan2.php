 

 <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Thanh toán</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Thanh toán</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <form action="index.php?quanly=dathang" method="POST">
                    <h4 class="font-weight-semi-bold mb-4">Thông tin người nhận</h4>
                    <div class="row">                   
                        <div class="col-md-6 form-group">
                            <label>Họ và tên</label>
                            <input class="form-control" name="hoten" type="text" placeholder="Họ và tên">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" name="sdt" type="text" placeholder="...">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="diachi" type="text" placeholder="Địa chỉ">
                        </div>
                         <div class="col-md-6 form-group">
                            <label>Ghi chú</label>
                            <textarea class="form-control" name="ghichu" placeholder="Ghi chú"></textarea>
                        </div>
                    </div>
               </div>
           </div>
                </div></div>

                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Hóa đơn</h4>
                    </div>
                   
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Sản phẩm</h5>
                        <?php foreach($cart as $key => $value):
                            $key++
             ?>
                        <div class="d-flex justify-content-between">
                         
                            <p><img  src="admincp/modules/quanlysp/uploads/<?php echo $value['hinh_anh']?>" alt="hinh anh" width="80px" ></p>
                    <p><?php echo $value['ten_sp'] ?></p>
                    <p> <?php echo $value['size'] ?></p>
                    <p> <?php echo $value['soluong'] ?></p>
                    <p><?php echo number_format($value['don_gia']) ?></p>
                    <p><?php echo number_format($value['don_gia']*$value['soluong']) ?></p>
                        
                        </div>
                        <?php endforeach ?>
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Tổng tiền</h6>
                            <h6 class="font-weight-medium"><?php echo number_format(total_price($cart)) ?> VNĐ</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phí ship</h6>
                            <h6 class="font-weight-medium">0</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Thành tiền</h5>
                            <h5 class="font-weight-bold"><?php echo number_format(total_price($cart)) ?> VNĐ</h5>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Hình thức thanh toán</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                                <label class="" >Thanh toán khi nhận hàng</label>                         
                        </div>
                    </div>
                    <div class="btn">
                       <button class="btn btn-sm btn-primary btn-plus" type="submit">Đặt hàng</button>
                    </div>
                </div>
                </div>
            </div>
        </form>
        <?php
            if(number_format(total_price($cart)) > 1000000){
                echo "Ban sẽ được tặng thêm một sản phẩm ngẫu nhiên vì hóa đơn của bạn trên 1000000VND";
            }
        ?>
        </div>
    </div>
    <!-- Checkout End -->


   