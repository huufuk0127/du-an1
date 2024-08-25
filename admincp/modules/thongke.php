<?php
    use Carbon\Carbon;
    include('../config/config.php');
    require('../../vendor/autoload.php');

    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    if(isset($_POST['thoigian'])){
        $thoigian = $_POST['thoigian'];
    }else{
        $thoigian = '';
    }

    if($thoigian=='7ngay'){
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->toDateString();
    }elseif($thoigian=='28ngay'){
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(28)->toDateString();
    }elseif($thoigian=='90ngay'){
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(90)->toDateString();
    }else{
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
    }

    $sql = "SELECT * FROM tbl_thongke WHERE ngaydat BETWEEN '$subdays' AND '$now' ORDER BY ngaydat ASC";
    $sql_query = mysqli_query($conn,$sql);

    $chart_data = array();

    while($val = mysqli_fetch_array($sql_query)){
        $chart_data[] = array(
            'date' => $val['ngaydat'],
            'order' => $val['donhang'],
            'sales' => $val['doanhthu'],
            'quantity' => $val['soluongban']
        );
    }

    echo json_encode($chart_data);
?>