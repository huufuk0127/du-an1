
<?php 
	$code=$_GET['code'];
	$sql= "SELECT * FROM tbl_shipping,tbl_cart WHERE tbl_shipping.ma_donhang=$code AND tbl_cart.code_cart=tbl_shipping.ma_donhang";
	$kq1= mysqli_query($conn,$sql);
	?>
	<?php while ($row= mysqli_fetch_array($kq1)) {
		?>
 <div class="col-md-10 content">
    <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Thông tin người nhận</h3>
            </div>
            <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <tr>
                <th>Tên khách hàng</th>
                <td><?php echo $row['hoten']; ?></td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td><?php echo $row['sdt']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $row['email_nhan']; ?></td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><?php echo $row['diachi_nhan']; ?></td>
            </tr>
            <tr>
                <th>Ngày đặt hàng</th>
                <td><?php echo $row['ngaydat'];?></td>
            </tr>
            <?php 
					}
				 ?>
        </table>
	<div class="panel-heading">
                <h3>Thông tin đơn hàng</h3>
            </div>
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<tr align="center">
			<th>ID</th>
			<th>Mã đơn hàng</th>
			<th>Sản phẩm</th>
			<th>Size</th>
			<th>Số lượng</th>
			<th>Đơn giá</th>
			<th>Thành tiền</th>
		</tr>
		<?php 
			$code=$_GET['code'];
			$sql= "SELECT * FROM tbl_cart_details,san_pham WHERE tbl_cart_details.ma_sp=san_pham.ma_sp AND tbl_cart_details.code_cart=$code  ORDER BY id_cart_details DESC";
			$kq= mysqli_query($conn,$sql);
			$i=0;
			$tongtien=0;
			while ($row= mysqli_fetch_array($kq)) {
				$i++;
				$tongtien=$row['don_gia']*$row['soluong']+$tongtien;
				?>
				<tr class="odd gradeX" align="center">
				
					<td><?php echo $i ?></td>
					<td><?php echo $row['code_cart'] ?></td>

					<td><img src="modules/quanlysp/uploads/<?php echo $row['hinh_anh']?>"  width =80px; height = 80px;><?php echo $row['ten_sp'] ?></td>
					<td><?php echo $row['size_mua'] ?></td>
					<td><?php echo $row['soluong'] ?></td>
					<td><?php echo number_format($row['don_gia'],0,',','.').' VNĐ' ?></td>
					<td><?php echo number_format($row['don_gia']*$row['soluong'],0,',','.').' VNĐ' ?></td>					
				</tr>
				<?php 
					}
				 ?>
				<tr>
					<td colspan="7">
						<h4 style="float: right; padding-right: 4px;">
							Tổng tiền: <?php echo number_format($tongtien,0,',','.').' VNĐ' ?>
						</h4>
					</td>
				</tr>
			</table>
			<p style="margin-top:1%"  align="center">
				<a href="modules/quanlydonhang/xuathoadon.php?code=<?php echo $code ?>"><i class="fa fa-print fa-2x" style="cursor: pointer;"></i></a>
			</p>

		</div></div>
