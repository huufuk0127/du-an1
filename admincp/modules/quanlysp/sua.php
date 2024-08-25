<?php 
		$ma = $_GET["masp"];
		$sql= "SELECT * FROM san_pham WHERE ma_sp='$ma'";
		$kq= mysqli_query($conn,$sql);
		while ($row= mysqli_fetch_row($kq)) {
				$h1=$row[0];
				$h2=$row[1];
				$h3=$row[2];
				$h4=$row[3];
				$h5=$row[4];
				$h6=$row[5];
				$h7=$row[6];
				$h8=$row[7];
				$h9=$row[8];
		}
?>

<div class="container-fluid main-container">
 <div class="col-md-6 content">
  			<div class="panel panel-default" style="border: none;">
            <div class="panel-heading" >
            	<h3>Cập nhật sản phẩm</h3>
            </div>
        	<div class="panel-body">
		<form action="modules/quanlysp/xuly.php?masp=<?php echo $h1 ?>"  method="POST" name="form1" id="form1" enctype="multipart/form-data">
		     <div class="form-group">
		        <label for="exampleInputPassword1">Mã sản phẩm </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h1;  ?>"  name="ma">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Tên sản phẩm </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h2;  ?>"  name="tensp">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Chất liệu </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h3;  ?>"  name="cl">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Size </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h4;  ?>"  name="size">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Đơn giá </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h5;  ?>"  name="dg">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Số lượng </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $h6;  ?>"  name="slg">
		      </div>		      
		      <div class="form-group">
		        <label for="exampleInputPassword1">Mô tả</label>
		        <textarea class="form-control" id="exampleInputPassword1" rows="7" name="mota"><?php echo $h7;  ?></textarea>
		      </div>
		      <div class="form-group">
		        <label for="exampleFormControlFile1">Hình ảnh</label>
		        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="hinhanh">
					<img src="modules/quanlysp/uploads/<?php echo $h8?>">
		      </div>
		       <div class="form-group">
			      <select class="form-control" name="loai">
						<?php  
							$sql_loai="SELECT * FROM loai";
							$query_loai= mysqli_query($conn,$sql_loai);
							while ($row_loai=mysqli_fetch_array($query_loai)) {
								if($row_loai['ma_loai']==$h9){
							?>
							<option selected value="<?php echo $row_loai['ma_loai']  ?>"><?php echo $row_loai['ten_loai'] ?>	
							</option>
							<?php  
								}else{
							?>	
							<option value="<?php echo $row_loai['ma_loai']  ?>"><?php echo $row_loai['ten_loai'] ?>						
							</option>
							<?php 
									}
							}
							 ?>
						</select>
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

