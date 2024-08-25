<?php 
session_start();
error_reporting(0);
//include 'Connect.php';
$conn = mysqli_connect("localhost","root","","qlbh");
$sql="SELECT * FROM san_pham ORDER BY ma_sp DESC";
$kq=mysqli_query($conn,$sql);

$output='';
if (isset($_POST["export_excel"])) {
    if (mysqli_num_rows($kq)) {
        $output.='<table class="table" bordered="1">
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm </th>
                <th>Chất liệu </th>
                <th>Size</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Mô tả</th>
                <th>Hình ảnh</th>
                <th>Mã loại</th>
            </tr>';
        while($row = mysqli_fetch_row($kq))
        {
            $output.='
            <tr>
                <td>'.$row[0].'</td>
                <td>'.$row[1].'</td>
                <td>'.$row[2].'</td>
                <td>'.$row[3].'</td>
                <td>'.$row[4].'</td>
                <td>'.$row[5].'</td>
                <td>'.$row[6].'</td>
                <td>'.$row[7].'</td>
                <td>'.$row[8].'</td>
            </tr>
            ';
        }
        $output.='</table>';
        header("Content-Type:application/xls");
        header("Content-Disposition: attachment; filename=download.xls");
        echo $output;
    }

}
 ?>