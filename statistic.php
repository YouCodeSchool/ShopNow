<?php
session_start();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ShopNow/public/css/index.css">
    <link rel="stylesheet" href="/ShopNow/public/css/statistic.css">
    <link rel="stylesheet" href="/ShopNow/public/css/sidebar.css">
    <link rel="stylesheet" href="/ShopNow/public/css/header.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet">
    <title>Statistic</title>
</head>

<body class="flex">
    <!-- sidebar -->
    <div style="overflow: hidden; position:fixed; left:0; right:0; width: 6.5%; height:100%; background-color: #1F2344; " class="sidebar">
    </div>
    <!-- end sidebar -->
    <!-- body content -->
    <div class="body w-full overflow-y-scroll">
        <div class="header w-full">
            <?php include('header.php') ?>
        </div>
        <div style="padding:1rem; flex-direction:column;" class="statistic-wrapper rounded-sm w-full flex bg-violet ">
            <div style="margin-top:5rem; margin-left: 8rem;" class="top flex justify-center">
                <div style="width:100%; height:100%; background-color:#12173D; display:flex; justify-content:center;" class="pie1 rounded">
                    <div style="width: 300px; height:400px;">
                        <canvas id="lineChart" style="width:400px; height:400px;"></canvas>
                    </div>
                </div>
            </div>
            <div style=" width:50%;">
                <!-- left side of body content -->
                <div style="margin-left: 4rem;" class="left-side-sta">
                    <div class="flex justify-center" style="width:100%; height:100%;">
                        <div style="width:100%; height:80%; background-color:#12173D; margin-top:3rem; margin-left:7.5rem;" class="pie2 rounded">
                            <div style="width: 399px; height:400px;">
                                <canvas id="myChart" style="width:200px; height:200px;"></canvas>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        </div>
                    </div>
                </div>
                <!-- end left side of body content -->
                <!-- right side of body content -->
                <div style="" class="right-side-sta">
                    <div class="flex justify-center">
                        <div style=" background-color:#12173D; " class="pie2 rounded">
                            <div style="width: 100%; height:100%;">
                                <canvas id="myChart2" style="width:600px; height:600px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const ctx1 = document.getElementById('lineChart');
            const lineChart = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: '% of NFTs In 2021',
                        data: [12, 19, 4, 6, 7, 4, 5, 10, 9, 20, 18, 17],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(64, 240, 131, 0.2)',
                            'rgba(255, 37, 55, 0.2)',
                            'rgba(28, 248, 200, 0.2)',
                            'rgba(53, 31, 252, 0.2)',
                            'rgba(247, 7, 255, 0.2)',
                            'rgba(223, 113, 10, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(64, 240, 131, 1)',
                            'rgba(255, 37, 55, 1)',
                            'rgba(28, 248, 200, 1)',
                            'rgba(53, 31, 252, 1)',
                            'rgba(247, 7, 255, 1)',
                            'rgba(223, 113, 10, 1)'

                        ],
                        borderWidth: 1,
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAZero: true
                        }
                    }
                }
            });
        </script>
        <script>
            const ctx = document.getElementById('myChart');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: '% of NFTs In 2021',
                        data: [12, 19, 4, 6, 7, 4, 5, 10, 9, 20, 18, 17],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(64, 240, 131, 0.2)',
                            'rgba(255, 37, 55, 0.2)',
                            'rgba(28, 248, 200, 0.2)',
                            'rgba(53, 31, 252, 0.2)',
                            'rgba(247, 7, 255, 0.2)',
                            'rgba(223, 113, 10, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(64, 240, 131, 1)',
                            'rgba(255, 37, 55, 1)',
                            'rgba(28, 248, 200, 1)',
                            'rgba(53, 31, 252, 1)',
                            'rgba(247, 7, 255, 1)',
                            'rgba(223, 113, 10, 1)'

                        ],
                        borderWidth: 1,
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAZero: true
                        }
                    }
                }
            });
        </script>
        <script>
             const ctx2 = document.getElementById('myChart2');
            const myChart2 = new Chart(ctx2, {
                type: 'pie',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: '% of NFTs In 2021',
                        data: [12, 19, 4, 6, 7, 4, 5, 10, 9, 20, 18, 17],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(64, 240, 131, 0.2)',
                            'rgba(255, 37, 55, 0.2)',
                            'rgba(28, 248, 200, 0.2)',
                            'rgba(53, 31, 252, 0.2)',
                            'rgba(247, 7, 255, 0.2)',
                            'rgba(223, 113, 10, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(64, 240, 131, 1)',
                            'rgba(255, 37, 55, 1)',
                            'rgba(28, 248, 200, 1)',
                            'rgba(53, 31, 252, 1)',
                            'rgba(247, 7, 255, 1)',
                            'rgba(223, 113, 10, 1)'

                        ],
                        borderWidth: 1,
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAZero: true
                        }
                    }
                }
            });
        </script>
        <script src="./public/js/helpers/helpers.js"></script>
        <script src="./public/js/sidebar.js"></script>
</body>

</html>