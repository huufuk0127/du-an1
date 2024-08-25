
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admincp</title>
	
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <link rel="stylesheet" type="text/css" href="dist/css/home_admin.css">

    <link rel="stylesheet" type="text/css"  href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"  href="bower_components/datatables/media/css/jquery.dataTables.min.css">
    
</head>
<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:Login/index.php');
 } 
 ?>
<body>
	
	<div>
	<?php 
		include("config/config.php");
		include("modules/header.php");
		include("modules/menu.php");
		include("modules/main.php");
		include("modules/footer.php");
	 ?>
	</div>
	 
</body>
</html>