
<?php 
     if (isset($_POST['doimatkhau'])) {
        $email=$_POST['email'];
        $matkhau_cu=$_POST['password_cu'];
        $matkhau_moi=$_POST['password_moi'];
        $sql="SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau_cu."' LIMIT 1";
        $row=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($row);

        if($count>0){
            $sql_update=mysqli_query($conn,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'WHERE email='".$email."'");
            echo '<p style="text-align:center;color:red">Mật khẩu đã được thay đổi<p>';
           // header("Location: index.php?quanly=giohang");
        }else{
            echo '<p style="text-align:center;color:red">Email hoặc mật khẩu cũ không chính xác vui lòng nhập lại!<p>';
            //header("Location: index2.php");
        }
     }
?>

   <h4 align="center">Đổi mật khẩu</h4>
     <!-- Contact Start -->
     <form action="" method="POST">
    <div class="container-fluid pt-5">
        
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5" style="margin-left: 250px;">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                required="required" data-validation-required-message="Vui lòng nhập email" />
                            <p class="help-block text-danger"></p>
                        </div>
                         <div class="control-group">
                            <input type="password" name="password_cu" class="form-control" placeholder="Mật khẩu cũ"
                                required="required" data-validation-required-message="Vui lòng nhập mật khẩu" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" name="password_moi" class="form-control" placeholder="Mật khẩu mới"
                                required="required" data-validation-required-message="Vui lòng nhập mật khẩu" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton" name="doimatkhau">Đổi mật khẩu</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</form>
    <!-- Contact End -->
