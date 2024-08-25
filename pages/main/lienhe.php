<?php
    $conn= new mysqli("localhost","root","","qlbh");
    error_reporting(0);
?>
 <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Liên hệ</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Liên hệ</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


     <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Liên hệ - Hỗ trợ khách hàng</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success">

                    </div>
                    <form name="sentMessage"  novalidate="novalidate" method = "POST">
                        <div class="control-group">
                            <input type="text" class="form-control" name ="name" placeholder="Họ tên"
                                required="required" data-validation-required-message="Vui lòng nhập họ tên!" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" name ="email" placeholder="Email"
                                required="required" data-validation-required-message="Vui lòng nhập email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" name ="message" placeholder="Nội dung"
                                required="required"
                                data-validation-required-message="Vui lòng nhập vào phản hồi của bạn"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" name ="sendMessageButton">Gửi phản hồi</button>
                        </div>
                        <?php
                        if(isset($_POST['sendMessageButton'])){
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];

                            // Chuẩn bị truy vấn SQL
                            $sql = "INSERT INTO lienhe (HoTen, Email, NoiDung) VALUES ('$name', '$email', '$message')";

                            // Thực thi truy vấn
                            if ($conn->query($sql) === TRUE) {
                                echo "Thông tin phản hồi đã được gửi thành công";
                            } else {
                            echo "Lỗi: " . $sql . "<br>" . $conn->error;
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Liên hệ</h5>
                <p>“Phong cách là cách nói lên bạn là ai mà không cần phải lên tiếng.</p>
                <p>“Style is a way to say who you are without having to speak.</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Pam Clothing and More</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>218 Lĩnh Nam, Hoàng Mai, Hà Nội</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>pamiuoi19@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>0361310213</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
