<div class="container-fluid main-container">
 <div class="col-md-6 content">
  			<div class="panel panel-default" style="border: none;">
            <div class="panel-heading" >
            	<h3>Thêm sản phẩm</h3>
            </div>
        	<div class="panel-body">
		<form action="modules/quanlysp/xuly.php"  method="POST" name="form1" id="form1" enctype="multipart/form-data">
		     <div class="form-group">
		        <label for="exampleInputPassword1">Mã sản phẩm </label>
		        <input type="text" class="form-control" id="exampleInputPassword1"  name="ma">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Tên sản phẩm </label>
		        <input type="text" class="form-control" id="exampleInputPassword1"  name="tensp">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Chất liệu </label>
		        <input type="text" class="form-control" id="exampleInputPassword1"  name="cl">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Size </label>
		        <input type="text" class="form-control" id="exampleInputPassword1" name="size">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Đơn giá </label>
		        <input type="text" class="form-control" id="exampleInputPassword1"  name="dg">
		      </div>
		      <div class="form-group">
		        <label for="exampleInputPassword1">Số lượng </label>
		        <input type="text" class="form-control" id="exampleInputPassword1"  name="slg">
		      </div>		      
		      <div class="form-group">
		        <label for="exampleInputPassword1">Mô tả</label>
		        <textarea class="form-control" id="exampleInputPassword1" rows="7" name="mota"></textarea>
		      </div>
		      <div class="form-group">
		        <label for="exampleFormControlFile1">Hình ảnh</label>
		        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="hinhanh">
					
		      </div>
		       <div class="form-group">
			      <select class="form-control" name="loai">
					
					<?php  
						$sql_loai="SELECT * FROM loai";
						$query_loai= mysqli_query($conn,$sql_loai);
						while ($row_loai=mysqli_fetch_array($query_loai)) {
						?>
						<option value="<?php echo $row_loai['ma_loai']  ?>"><?php echo $row_loai['ten_loai'] ?>	
						</option>
						<?php  
							}
						?>	
					
						</select>
					</div>
		      <div class="row">
		          <div class="col-md-6 col-sm-6 col-xs-6">
		            <button type="submit" name ="submit" class="btn btn-warning btn-block btn-lg">Thêm</button>
		          </div>
		          <div class="col-md-6 col-sm-6 col-xs-6">
		               <button type="reset" class="btn btn-default btn-block btn-lg" style="background: gray; color:white;">Nhập lại</button>
		          </div>
		      </div>
		</form>

</div></div>
            </div>
  		</div>

