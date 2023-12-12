<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <title>Document</title>
</head>
<style>
    form{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
    }
</style>
<body>
<div id="layoutSidenav_content">
    <form action="?act=thongke" method="post" >
        <div class="chart">
            <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>
            <script>
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    const data = google.visualization.arrayToDataTable([
                        ['Danh mục', 'Số lượng'],
                        <?php
                        $chart = charCategory();
                        foreach ($chart as $ch){
                            extract($ch);
                            echo "['$name_dm',$soluong],";
                        }
                        ?>
                    ]);
                    const options = {
                        title:'Số lượng sản phẩm theo danh mục'
                    };
                    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                    chart.draw(data, options);
                }
            </script>
        </div>
        <div class="chart">
         <!--   <canvas id="myChartt" style="width:100%;max-width:600px"></canvas>

            <script>
                <?php
/*                $chaa = chatMonth();
                foreach ($chaa as $ch){
                    extract($ch);
                }
                */?>
                const xValues = ["<?php /*echo $ch['thang'] */?>",];
                const yValues = [<?php /*echo $ch['tong'] */?>,];
                const barColors = ["red", "green","blue","orange","brown"];

                new Chart("myChartt", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {display: false},
                        title: {
                            display: true,
                            text: "Doanh thu theo tháng"
                        }
                    }
                });
            </script>-->
        </div>
    </form>
</div>
</body>
</html>

