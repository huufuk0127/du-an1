<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
</head>
<body>
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
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton" name="dangnhap">Gửi lại mã</button>
                        </div>
                    </form>
        </body>
</html>