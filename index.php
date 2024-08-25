<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="shop/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="shop/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="shop/css/style.css" rel="stylesheet">
	<title>Pam Clothing and More</title>
</head>
<body>
	<div class="wrapper">
           <?php 
			include 'pages/main/cart_function.php';
			include("admincp/config/config.php");
			include("pages/header.php");
			include("pages/menu.php");
			include("pages/main.php");
			include("pages/footer.php");
		 ?>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="shop/lib/easing/easing.min.js"></script>
    <script src="shop/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="shop/mail/jqBootstrapValidation.min.js"></script>
    <script src="shop/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="shop/js/main.js"></script>
</body>
</html>