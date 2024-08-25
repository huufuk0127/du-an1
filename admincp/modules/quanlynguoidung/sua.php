<?php 
		$ma = $_GET["ma"];
		$sql= "SELECT * FROM tbl_dangky WHERE id_dangky='$ma'";
		$kq= mysqli_query($conn,$sql);
		while ($row= mysqli_fetch_row($kq)) {
				$h1=$row[0];
				$h2=$row[1];
				$h3=$row[2];
				$h4=$row[3];
				$h5=$row[4];
				$h6=$row[5];
		}
?>

<div class="container-fluid main-container">
 <div class="col-md-6 content">
  			<div class="panel panel-default" style="border: none;">
            <div class="panel-heading" >
            	<h3>Cập nhật tài khoản người dùng</h3>
            </div>
        	<div class="panel-body">
		<form action="modules/quanlynguoidung/xuly.php?ma=<?php echo $h1 ?>"  method="POST" name="form1" id="form1" enctype="multipart/form-data">
		     <div class="form-group">
		        <label for="exampleInputPassword1">ID đăng ký</label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h1;  ?>"  name="id_dangky">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Tên khách hàng </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h2;  ?>"  name="tenkhachhang">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Email </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h3;  ?>"  name="email">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Địa chỉ </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h4;  ?>"  name="diachi">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Điện thoại </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h6;  ?>"  name="dienthoai">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Mật khẩu </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h5;  ?>"  name="matkhau">
		      </div>		      
	
		      <div class="row">
		          <div class="col-md-6 col-sm-6 col-xs-6">
		            <button type="submit" name ="sua" class="btn btn-warning btn-block btn-lg">Sửa</button>
		          </div>
		          
		      </div>
		</form>

</div></div>
            </div>
  		</div>

