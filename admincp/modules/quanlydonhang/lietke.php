<div class="col-md-10 content">
    <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Danh sách đơn hàng</h3>
            </div>
            <div class="panel-body">
	 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<tr align="center">
			<th>ID</th>
			<th>Mã đơn hàng</th>
			<th>Mã khách hàng</th>
			<th>Tên khách hàng</th>
			<th>Địa chỉ</th>
			<th>Số điện thoại</th>
			<th>Tình trạng</th>
			<th>Quản lý</th>
			<th>Hủy đơn</th>
			<th>Cập nhật</th>
		</tr>
		<?php 
			$sql= "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY id_cart DESC";
			$kq= mysqli_query($conn,$sql);
			$i=0;
			while ($row= mysqli_fetch_array($kq)) {
				$i++;
				?>
				<tr class="odd gradeX" align="center">
				
					<td><?php echo $i ?></td>
					<td><?php echo $row['code_cart'] ?></td>
					<td><?php echo $row['id_dangky'] ?></td>
					<td><?php echo $row['tenkhachhang'] ?></td>
					<td><?php echo $row['diachi'] ?></td>
					<td><?php echo $row['dienthoai'] ?></td>
					<td>
						<?php if($row['cart_status']==1){
							echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Xác nhận đơn hàng</a>';
						}else{
							echo 'Đã xác nhận đơn hàng';
						}?>
					</td>
					<td class="center">
						<i class="fa fa-pencil fa-fw">
                                    </i> 
			<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
				<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a class="a1" href="modules/quanlydonhang/xuly.php?ma=<?php echo $row['code_cart'] ?>">Xóa</a></td>			
				</td>
				<td class="center"><i class="fa fa-pencil fa-fw"></i> <a class="a1" href="#">Cập nhật</a></td>			
				</td>
				</tr>
				<?php 
					}
				 ?>
			</table>
		</div></div>






		 