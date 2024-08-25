<?php 
    if(isset($_POST['dangky'])){
        $tenkhachhang=$_POST['hovaten'];
        $email=$_POST['email'];
        $dienthoai=$_POST['dienthoai'];
        $matkhau=$_POST['matkhau'];
        $matkhaunhaplai = $_POST['nhaplaimatkhau'];
        $diachi=$_POST['diachi'];
        if ($matkhau === $matkhaunhaplai) {
            $sql_dangky=mysqli_query($conn,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,nhaplaimatkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$matkhaunhaplai."','".$dienthoai."') ");
            if($sql_dangky){
                $_SESSION['dangky']=$tenkhachhang;
                $_SESSION['id_khachhang']=mysqli_insert_id($conn);
                header('Location: index.php?quanly=giohang');
            }
        } else {
            echo '<p style="text-align:center;color:red">Mật khẩu nhập lại không khớp</p>';
        }
    }
?>
   <h4 align="center">Đăng ký thành viên</h4>
     <!-- Contact Start -->
     <form action="" method="POST">
    <div class="container-fluid pt-5">
        
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5" style="margin-left: 250px;">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" name="hovaten" class="form-control" id="name" placeholder="Họ tên"
                                required="required" data-validation-required-message="Vui lòng nhập họ tên!" />
                                
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                required="required" data-validation-required-message="Vui lòng nhập email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="dienthoai" class="form-control" placeholder="Số điện thoại"
                                />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ"
                                required="required" data-validation-required-message="Vui lòng nhập địa chỉ" />
                            <p class="help-block text-danger"></p>
                        </div>
                         <div class="control-group">
                            <input type="password" name="matkhau" class="form-control" placeholder="Mật khẩu"
                                required="required" data-validation-required-message="Vui lòng nhập mật khẩu" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" name="nhaplaimatkhau" class="form-control" placeholder="Nhập lại mật khẩu"
                                required="required" data-validation-required-message="Vui lòng nhập mật khẩu" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton" name="dangky">Đăng ký</button>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton"><a href="index.php?quanly=dangnhap" style="color: black;">Đăng nhập nếu đã có tài khoản</a></button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</form>
    <!-- Contact End -->
