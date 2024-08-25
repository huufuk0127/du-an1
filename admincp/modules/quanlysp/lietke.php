<?php

	if (isset($_GET['trang'])) {
		$page=$_GET['trang'];
	}else{
		$page='';
	}
	if ($page==''||$page==1) {
		$begin=0;
	}else{
		$begin=($page*8)-8;
	}
	$sql_pro="SELECT * FROM san_pham,loai WHERE san_pham.ma_loai=loai.ma_loai ORDER BY san_pham.ma_sp DESC LIMIT $begin,8";
	$kq=mysqli_query($conn,$sql_pro);


?>
	<div class="container-fluid main-container">
  		<div class="col-md-10 content">
  			<div class="panel panel-default">
            <div class="panel-heading">
            	<h3>Danh sách sản phẩm</h3>
            </div>
        	<div class="panel-body">
	       	  <form name="form1" method="post" action="">
                 <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm </th>
						<th>Chất liệu </th>
						<th>Size</th>
						<th>Đơn giá</th>
						<th>Số lượng</th>
						<th>Mô tả</th>
						<th>Hình ảnh</th>
						<th>Tên loại</th>
						<th>Chỉnh sửa</th>
						<th>Xóa</th>
					</tr>
                </thead>
                <tbody>
					<tr class="odd gradeX" align="center">
                    <?php
                    if ($kq) {
                        while ($row = mysqli_fetch_array($kq) ) {

							echo "<tr>";
							echo "<td>".$row['ma_sp']."</td>";
							echo "<td>".$row['ten_sp']."</td>";
							echo "<td>".$row['chat_lieu']."</td>";
							echo "<td>".$row['size']."</td>";
							echo "<td>".$row['don_gia']."</td>";
							echo "<td>".$row['so_luong']."</td>";
							echo "<td>".$row['mo_ta']."</td>";
							echo "<td>";
					?>
					<img src="modules/quanlysp/uploads/<?php echo $row['hinh_anh']?>"  width =80px; height = 80px;>
					<?php 
							echo "</td>";
							echo "<td>".$row['ten_loai']."</td>";
							?>

                                <td class="center"><a class="center" href="?action=quanlysp&query=sua&masp=<?php echo $row['ma_sp'] ?>"><i class="fa fa-pencil fa-fw"></i> Cập nhật</a></td>
                                <td class="center"><a class="center" href="modules/quanlysp/xuly.php?masp=<?php echo $row['ma_sp'] ?>"> <i class="fa fa-trash-o  fa-fw"></i>Xóa</a></td>
                    </tr>
                    <?php 
                    }
                    }
                    ?>
                </tbody>
            </table>
              </form>
              <form action="modules/quanlysp/export_excel.php" method="POST">
		 	<input type="submit" name="export_excel" value="Xuất Excel">
		 </form>
	        </div>
            </div></div>
  		</div>
<div style="clear:both;"></div>
				<style type="text/css">
					ul.list_trang {
				    padding: 0;
				   	margin-left: 40%;
				    list-style: none;
					}
					ul.list_trang li {
				    float: left;
				    padding: 5px 15px;
				    margin: 4px;
				    display: block;
					}
					ul.list_trang li a {
				    text-decoration: none;
				    display: block;
				    color: #665f5f;
    				font-size: 20px;
					}
				</style>
				<?php 
					$sql_trang=mysqli_query($conn,"SELECT * FROM san_pham");
					$row_count= mysqli_num_rows($sql_trang);
					$trang=ceil($row_count/8);
				 ?>
				<ul class="list_trang">
					<?php 
						for ($i=1; $i <= $trang; $i++) { 
					 ?>
					<li <?php if($i==$page){ echo 'style="background-color: #e3e3e3;"';} else{ echo '';} ?>>
						<a href="index.php?action=quanlysp&query=them&trang=<?php echo $i ?>"><?php echo $i ?></a>
					</li>
					<?php 
						}
					 ?>
				</ul>

