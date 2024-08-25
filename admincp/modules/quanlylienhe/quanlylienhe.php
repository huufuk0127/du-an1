
<!-- Page Content -->
<div class="col-md-10 content">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Danh sách phản hồi</h3>
            </div>
            <div class="panel-body">
              <form name="form1" method="post" action="">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Họ Tên</th>
						<th>Email</th>
						<th>Nội dung</th>
						<th>Phản hồi</th>
                    </tr>
                </thead>
                <tbody>
                    
				<?php 
					$sql= "SELECT * FROM lienhe ";
					$kq= mysqli_query($conn,$sql);
					
					while ($row= mysqli_fetch_array($kq)) {					
						?>
						<tr class="odd gradeX" align="center">
						
							<td><?php echo $row['HoTen'] ?></td>
							<td><?php echo $row['Email'] ?></td>
							<td><?php echo $row['NoiDung'] ?></td>
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


