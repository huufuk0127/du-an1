
<?php

	$conn= new mysqli("localhost","root","","qlbh");
	error_reporting(0);
?>

<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Giỏ hàng</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Giỏ hàng</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
							<th colspan="2">Sản phẩm </th>
							<th>Size</th>
							<th>Số lượng</th>
							<th>Đơn giá</th>
							<th>Thành tiền</th>
							<th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    	<?php foreach($cart as $key => $value):
			 ?>
			 <tr>
					<?php $key++ ?>
					<td  class="align-middle"><img  src="admincp/modules/quanlysp/uploads/<?php echo $value['hinh_anh']?>" alt="hinh anh" width="80px" ></td>
					<td  class="align-middle"><?php echo $value['ten_sp'] ?></td>
					<td class="align-middle"> <?php echo $value['size'] ?></td>
					<td class="align-middle" >
						<form action="pages/main/themgiohang2.php">
							<input type="hidden" name="action" value="update">
							<input type="hidden" name="idsp" value="<?php echo $value['ma_sp'] ?>">  
                             
                                <div style="width: 90px;">
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" name="soluong" value="<?php echo $value['soluong'] ?>">
                                </div>
                                  <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus" type="submit">Cập nhật</button>
                                   </div>
                                                          					
						</form>
					</td>
					<td class="align-middle"><?php echo number_format($value['don_gia']) ?></td>
					<td class="align-middle"><?php echo number_format($value['don_gia']*$value['soluong']) ?></td>
					<td class="align-middle"><a class="btn btn-sm btn-primary" href="pages/main/themgiohang2.php?idsp=<?php echo $value['ma_sp'] ?>&action=delete" title=""><i class="fa fa-times"></i></a></td>
				</div>

				</tr>
			<?php endforeach ?>
			
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Tổng giỏ hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Sản phẩm</h6>
                            <h6 class="font-weight-medium"><?php echo number_format(total_price($cart)) ?> VNĐ</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phí ship</h6>
                            <h6 class="font-weight-medium">0đ</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Tổng tiền</h5>
                            <h5 class="font-weight-bold"><?php echo number_format(total_price($cart)) ?> VNĐ</h5>
                        </div>
                        <?php 
                            if(isset($_SESSION['dangky'])){
                                ?>
                                <p><a href="index.php?quanly=thanhtoan" class="btn btn-block btn-primary my-3 py-3">Đặt hàng</a></p>
                        <?php 
                            }else{
                        ?>
                                <p><a href="index.php?quanly=dangky" class="btn btn-block btn-primary my-3 py-3">Đăng ký đặt hàng</a></p>
                        <?php         
                            }
                         ?>
                        
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->