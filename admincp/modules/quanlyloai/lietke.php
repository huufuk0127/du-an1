
<div class="container-fluid main-container">
<div class="col-md-10 content">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Danh mục sản phẩm</h3>
            </div>
            <div class="panel-body">
            <div class="row">

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				                    <?php 
				?>
                    <h4><a href="index.php?action=quanlyloai&query=them&addCategory=hh" style="color: brown; text-decoration: underline;">Thêm danh mục </a></h4>
                    <?php if(isset($_GET['addCategory'])) {
                        ?>
                    <form action ="modules/quanlyloai/xuly.php" method="POST">
                        <div class="form-group">
                        	<label>Mã danh mục(Loại)</label>
                            <input class="form-control" name="ma" placeholder="Vui lòng nhập mã danh mục sản phẩm" />
                            <label>Tên danh mục(Loại)</label>
                            <input class="form-control" name="ten" placeholder="Vui lòng nhập tên danh mục sản phẩm" />
                        </div>

                        <button type="submit" name ="submit" class="btn btn-warning">Thêm </button>
                        <button type="reset" class="btn btn-default">Nhập lại</button>
                    </form>
                    <?php }?>
                </div>

				<?php 
						if(isset($_GET["maa"])){
							$ma = $_GET["maa"];
							$sql= "SELECT * FROM loai WHERE ma_loai='$ma'";
							$kq= mysqli_query($conn,$sql);
							while ($row= mysqli_fetch_row($kq)) {
									$h1=$row[0];
									$h2=$row[1];
							}
				?>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">				                  
                    <h4><a href="index.php?action=quanlyloai&query=them&addCategory=hh" style="color: brown; text-decoration: underline;">Chỉnh sửa danh mục </a></h4>
                  
                    <form action ="modules/quanlyloai/xuly.php?maa=<?php echo $h1 ?>" method="POST">
                        <div class="form-group">
         
                            <label>Tên danh mục(Loại)</label>
                            <input class="form-control" name="ten" value="<?php echo $h2;  ?>" />
                        </div>

                        <button type="submit" name ="sua" class="btn btn-warning">Cập nhật </button>
                        <button type="reset" class="btn btn-default">Nhập lại</button>
                    </form>
                    <?php }?>
                </div>


            <table class="table table-striped table-bordered table-hover" >
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Danh mục sản phẩm</th>
                        <th>Chính sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
					$conn= new mysqli("localhost","root","","qlbh");
					$sql= "SELECT * FROM loai";
					$kq= mysqli_query($conn,$sql);
					while ($row= mysqli_fetch_row($kq)) {
				?>

                            <tr class="odd gradeX" align="center">
                                <td> <input class="form-control" name ="ma" type="text" value="<?php echo $row[0] ?>" style="background: transparent; border: none;"/></td>

                                <td>
                                    <div class="form-group">
                                        <input class="form-control" name ="ten" type="text" value="<?php echo $row[1] ?>" style="background: transparent; border: none;"/>
                                    </div>
                                </td>

                                <td class="center">
                                    <i class="fa fa-pencil fa-fw">
                                    </i> 
                                    <a href="index.php?action=quanlyloai&query=them&maa=<?php echo $row[0] ?>">Cập nhật</a>
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a class="a1" href="modules/quanlyloai/xuly.php?ma=<?php echo $row[0] ?>">Xóa</a></td>

                            </tr>
                            <?php
                        }
                    
                    ?>
                </tbody>

            </table>
             <form action="modules/quanlyloai/export_excel.php" method="POST">
		 	<input type="submit" name="export_excel" value="Xuất Excel">
		 </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div></div>
<!-- /#page-wrapper -->
