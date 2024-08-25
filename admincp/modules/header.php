<?php 
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1) {
		unset($_SESSION['dangnhap']);
		header('Location:Login/index.php');
	}
?>

	<nav class="navbar navbar-default sidebar navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<h3 style="color: #54ae40;">Admin</h3>
				
			
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!-- <form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form> -->
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown ">
					<a href="index.php?dangxuat=1" class="dropdown-toggle" ><i class="fa fa-sign-out fa-fw"></i>
						Đăng xuất
						<span class="caret"></span></a>
						
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">

					<li style="" class="active"><a href="index.php" style="color: white;background: #4c9a5f;"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
					<li><a href="index.php?action=quanlyloai&query=them"><span class="glyphicon glyphicon-plane"></span> Danh mục sản phẩm</a></li>
					

					<!-- Dropdown-->
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl1">
							<span class="glyphicon glyphicon-signal"></span> Sản phẩm <span class="caret"></span>
						</a>

						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="index.php?action=quanlysp&query=them">Danh sách sản phẩm</a></li>
									<li><a href="index.php?action=quanlysp&query=themsp">Thêm sản phẩm</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl2">
							<span class="fa fa-shopping-cart"></span> Đơn Hàng <span class="caret"></span>
						</a>

						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl2" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="index.php?action=quanlydonhang&query=lietke">Danh sách đơn hàng</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="index.php?action=quanlylienhe&query=xem"><span ></span> Liên hệ, phản hồi</a></li>
					<li><a href="index.php?action=quanlynguoidung&query=xem" class="glyphicon glyphicon-user"><span ></span> Quản lý người dùng</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div></div>
