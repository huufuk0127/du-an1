<!DOCTYPE html>
<html>

<head>
    <title>In hóa đơn</title>
    <link rel="stylesheet" type="text/css" href="hoadon.css">
</head>

<body onload="window.print();">
    <div id="page" class="page">
        <div class="row header">
            <div class="company text-center col-7">
                <p style="font-size: 40px;"><b>PAM Clothing and More</b></p>
                <span>Địa chỉ: 218 Lĩnh Nam,Hoàng Mai, Hà Nội</span><br>
                <span>Hotline: 0361310213</span><br>
                <span>Email: pamiuoi19@gmail.com</span><br>
            </div>
        </div>
        <hr />
        <div class="text-center">
            <h4>HÓA ĐƠN THANH TOÁN</h4>
            <span class="text-right">Số: <?php $code=$_GET['code'];;
                                            echo $code ?></span><br />
        </div>
        <div style="float: right;">
            <span>Hà Nội,</span>
            <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = getdate();
            echo " Ngày " . $date['mday'] . ",<span>";
            echo " Tháng " . $date['mon'] . ",<span>";
            echo " Năm " . $date['year'] . "<span style='margin-left:5px'>";
            ?>
        </div>
        <br />
        <br />
        <?php
        require("../../config/config.php");
        
        
        $sql= "SELECT * FROM tbl_shipping,tbl_cart WHERE tbl_shipping.ma_donhang=$code AND tbl_cart.code_cart=tbl_shipping.ma_donhang";
        $kq1= mysqli_query($conn,$sql);
        $array = mysqli_fetch_array($kq1);
        ?>
        <div class="col-12">
            <p>Họ và tên khách hàng : <b><?php echo $array['hoten']; ?></b></p>
            <p>Số điện thoại: <b><?php echo $array['sdt']; ?></b></p>
            <p>Email: <b><?php echo $array['email_nhan']; ?></b></p>
            <p>Địa chỉ: <b><?php echo $array['diachi_nhan']; ?></b></p>
            <p>Ngày đặt hàng : <b><?php echo $array['ngaydat']; ?></b></p>
        </div>

        <div class="col-12">
            <table class="mb-3 table table-bordered table-hover" border="1px" style="border-collapse: collapse;">
                <tr class="bg-info">
                    <th class="p-2 text-center">STT</th>
                    <th class="p-2 text-center">Mã đơn hàng</th>
                    <th class="p-2 text-center">Mã sản phẩm</th>
                    <th class="p-2 text-center">Tên sản phẩm</th>
                    <th class="p-2 text-center">Size</th>
                    <th class="p-2 text-center">Số lượng</th>
                    <th class="p-2 text-center">Giá</th>
                    <th class="p-2 text-center">Thành tiền</th>
                </tr>
                <?php
                $pos = 1;
                $tongsotien = 0;
                $sql1= "SELECT * FROM tbl_cart_details,san_pham WHERE tbl_cart_details.ma_sp=san_pham.ma_sp AND tbl_cart_details.code_cart=$code  ORDER BY id_cart_details DESC";
                $kq= mysqli_query($conn,$sql1);
                if ($kq) {
                    while ($row = mysqli_fetch_array($kq)) {
                        $tongsotien= $row['soluong']*$row['don_gia']+$tongsotien;
                        ?>
                        <tr>
                            <td class="p-2" align="center"><?php echo $pos++; ?></td>
                            <td class="p-2" align="center"><?php echo $row['code_cart'] ?></td>
                            <td class="p-2" align="center"><?php echo $row['ma_sp'] ?></td> 
                            <td class="p-2" align="center"><?php echo $row['ten_sp'] ?></td>
                            <td class="p-2" align="center"><?php echo $row['size_mua'] ?></td>
                            <td class="p-2" align="center"><?php echo $row['soluong']; ?></td>
                            <td class="p-2" align="center"><?php echo number_format($row['don_gia'], 0, ",", "."); ?>đ</td>
                            <td class="p-2" align="center"><?php echo number_format(($row['soluong']*$row['don_gia']), 0, ",", "."); ?></td>
                            
                        </tr>
                <?php }
                } else {
                    echo "";
                } ?>
                <tr>
                    <td height="40px" colspan="8" class="tong" align="center"><b>Tổng cộng: <?php echo number_format(($tongsotien), 0, ",", ".") ?>đ</b></td>
                    
                    
                </tr>
            </table>
        </div>

        <div class="">
            <p class="mb-5">Cảm ơn quý khách đã mua hàng tại website của chúng tôi. Sản phẩm có thể đổi trả trong vòng 14 ngày kể từ ngày nhận hàng. Mọi thắc mắc vui lòng liên hệ Hotline: 0361310213 hoặc Email: pamiuoi@gmail.com. </p>
        </div>
        
    </div>
</body>

</html>