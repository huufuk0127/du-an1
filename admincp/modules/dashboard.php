<div class="col-md-10 content">
    <p>Thống kê đơn hàng theo: <span id="text-date">365 ngày qua</span></p>
    <p>
        <select class="select-date">
            <option value="7ngay">7 ngày qua</option>
            <option value="28ngay">28 ngày qua</option>
            <option value="90ngay">90 ngày qua</option>
            <option value="365ngay">365 ngày qua</option>
        </select>
    </p>
    <div id="chart" style="height: 250px;"></div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var chart = new Morris.Area({
                element: 'chart',
                xkey: 'date',
                ykeys: ['order', 'sales', 'quantity'],
                labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra'],
                parseTime: false
            });

            $('.select-date').change(function(){
                var thoigian = $(this).val();
                var text;
                if(thoigian == '7ngay'){
                    text = '7 ngày qua';
                }else if(thoigian == '28ngay'){
                    text = '28 ngày qua';
                }else if(thoigian == '90ngay'){
                    text = '90 ngày qua';
                }else{
                    text = '365 ngày qua';
                }

                $('#text-date').text(text);

                $.ajax({
                    url: "modules/thongke.php",
                    method: "POST",
                    dataType: "JSON",
                    data: {thoigian: thoigian},
                    success: function(data){
                        chart.setData(data);
                    }
                });
            });

            function thongke(){
                var text = '365 ngày qua';
                $('#text-date').text(text);
                $.ajax({
                    url: "modules/thongke.php",
                    method: "POST",
                    dataType: "JSON",
                    success: function(data){
                        chart.setData(data);
                    }
                });
            }

            thongke();
        });
    </script>
</div>