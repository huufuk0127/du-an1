<?php
$conn= new mysqli("localhost","root","","qlbh");
?>
<style type="text/css">
   
.col-md-6.col-lg-3 {
    background-color: #f2f2f2;
    margin: 0 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    border: 0px solid #e7e7e7;
    width: 213px;  
    padding: 10px;
    border-radius: 5px;
    min-height: 125px;
}
.counter_no {
    padding: 0 12px;
    align-content: center;
    align-items: center;
    float: right;
    width: 100%;
}
.counter_no p.total_no {
    text-align: center;
    font-weight: bold;
    color: #505250;
    font-size: 25px;
}
.couter_icon i {
    color: #f0532f;
    font-size: 35px;
    line-height: normal;
    width: 100%;
    float: left;
    text-align: center;
    padding: 10px 0px;
}
.counter_no .head_couter { 
    color: #7c7d7ee0;
    font-size: 15px;
    text-align: center;
}
.row.column1 {
    margin-bottom: 32px;
}
</style>
      <div class="container-fluid main-container">
                    <div class="col-md-10 content">
                       
                        <div class="row column1">
                            
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-suitcase blue2_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <?php
                                            $select_orders = mysqli_query($conn, "SELECT * FROM tbl_cart");
                                            $number_of_products = mysqli_num_rows($select_orders);
                                            
                                            ?>
                                            <p class="total_no"><?php echo $number_of_products ?></p>
                                            <p class="head_couter">Đơn đặt hàng đã đặt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-tasks purple_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <?php
                                            $select_products = mysqli_query($conn, "SELECT * FROM `san_pham`");
                                            $number_of_products = mysqli_num_rows($select_products);
                                            ?>
                                            <p class="total_no"><?php echo $number_of_products; ?></p>
                                            <p class="head_couter">Sản phẩm đang có</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-group brown_color"></i>

                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <?php
                                            $select_users = mysqli_query($conn, "SELECT * FROM `tbl_dangky`") or die('query failed');
                                            $number_of_users = mysqli_num_rows($select_users);
                                            ?>
                                            <p class="total_no"><?php echo $number_of_users; ?></p>
                                            <p class="head_couter">Người dùng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-money yellow_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                             <?php 
                                           
                                            $sql= "SELECT * FROM tbl_cart_details,san_pham WHERE tbl_cart_details.ma_sp=san_pham.ma_sp ";
                                            $kq= mysqli_query($conn,$sql);
                                            
                                            $tongtien=0;
                                            while ($row= mysqli_fetch_array($kq)) {
                                                
                                                $tongtien=$row['don_gia']*$row['soluong']+$tongtien;
                                                }
                                            ?>
                                            <p class="total_no"><?php echo number_format($tongtien,0,',','.') ?></p>
                                            <p class="head_couter">Doanh thu (VNĐ)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                       </div> 
               

            <!-- jQuery -->

           

