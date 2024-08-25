<?php 
session_start();
error_reporting(0);
//include 'Connect.php';
$conn = mysqli_connect("localhost","root","","qlbh");
$sql="SELECT * FROM loai ORDER BY ma_loai DESC";
$kq=mysqli_query($conn,$sql);

$output='';
if (isset($_POST["export_excel"])) {
    if (mysqli_num_rows($kq)) {
        $output.='<table class="table" bordered="1">
            <tr>
                <th>Mã loại</th>
                <th>Tên loại</th>
            </tr>';
        while($row = mysqli_fetch_row($kq))
        {
            $output.='
            <tr>
                <td>'.$row[0].'</td>
                <td>'.$row[1].'</td>
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