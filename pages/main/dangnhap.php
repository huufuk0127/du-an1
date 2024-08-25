<?php 
	 $conn= new mysqli("localhost","root","","qlbh");
	 if (isset($_POST['dangnhap'])) {
	 	$email=$_POST['email'];
	 	$matkhau=$_POST['password'];

	 	$sql="SELECT * FROM tbl_dangky WHERE  (email='".$email."' OR dienthoai='".$email."') AND matkhau='".$matkhau."' LIMIT 1";
	 	$row=mysqli_query($conn,$sql);
	 	$count=mysqli_num_rows($row);

	 	if($count>0){
	 		$row_data=mysqli_fetch_array($row);
	 		$_SESSION['dangky']=$row_data['tenkhachhang'];
            $_SESSION['id_khachhang']=$row_data['id_dangky'];
	 		header("Location: index.php?quanly=giohang");
	 	}else{
	 		echo '<p style="text-align:center;color:red">Email hoặc mật khẩu không chính xác vui lòng nhập lại!<p>';
	 		//header("Location: index2.php");
	 	}
	 }
?>

   <h4 align="center">Đăng nhập</h4>
     <!-- Contact Start -->
     <form action="" method="POST">
    <div class="container-fluid pt-5">
        
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5" style="margin-left: 250px;">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email hoặc số điện thoại"
                            required="required" data-validation-required-message="Vui lòng nhập email hoặc số điện thoại"
                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}|[0-9]{10,}"
                            title="Vui lòng nhập đúng định dạng email hoặc số điện thoại" />
                        <p class="help-block text-danger"></p>
                        </div>
                         <div class="control-group">
                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu"
                                required="required" data-validation-required-message="Vui lòng nhập mật khẩu" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton" name="dangnhap">Đăng nhập</button>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton" name="dangky"><a href="index.php?quanly=dangky" style="color: black;">Đăng ký nếu chưa có tài khoản</a></button>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton" name="quenmatkhau"><a href="index.php?quanly=quenmatkhau" style="color: black;">Quên mật khẩu</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</form>
    <!-- Contact End -->
