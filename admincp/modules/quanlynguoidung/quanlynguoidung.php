
<!-- Page Content -->
<div class="col-md-10 content">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Danh sách người dùng</h3>
            </div>
            <div class="panel-body">
              <form name="form1" method="post" action="">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID đăng ký</th>
						<th>Tên khách hàng</th>
						<th>Email</th>
						<th>Địa chỉ</th>
						<th>Số điện thoại</th>
						<th>Mật khẩu</th>
						<th>Chỉnh sửa</th>
						<th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    
				<?php 
					$sql= "SELECT * FROM tbl_dangky ORDER BY id_dangky DESC";
					$kq= mysqli_query($conn,$sql);
					
					while ($row= mysqli_fetch_array($kq)) {					
						?>
						<tr class="odd gradeX" align="center">
						
							<td><?php echo $row['id_dangky'] ?></td>
							<td><?php echo $row['tenkhachhang'] ?></td>
							<td><?php echo $row['email'] ?></td>
							<td><?php echo $row['diachi'] ?></td>
							<td><?php echo $row['dienthoai'] ?></td>
							<td><?php echo $row['matkhau'] ?></td>
							<td class="center">
								<a class="center" href="?action=quanlynguoidung&query=sua&ma=<?php echo $row['id_dangky'] ?>"><i class="fa fa-pencil fa-fw"></i> Cập nhật</a>
							</td>
                             <td class="center">
                             	<a class="center" href="modules/quanlynguoidung/xuly.php?ma=<?php echo $row['id_dangky'] ?>"> <i class="fa fa-trash-o  fa-fw"></i>Xóa</a>
                             </td>
						</tr>
					<?php 
						}
					 ?>

                </tbody>
            </table>
        </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


