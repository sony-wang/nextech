<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexTech x 雷達圖</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{url('/css/style.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="d-flex justify-content-center my-3">
        <a href="/">
            <img class="logo" src="{{url('/img/logo.svg')}}" alt="">
        </a>
    </div>
    @if (empty($_GET['id']))
    <h1 class="text-center text-brand">{{$noTaxId}}</h1>
    @else
    <h1 class="text-center text-white bg-brand py-3 shadow-sm">{{$company}} 雷達圖</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h3>總體分析</h3>
                        <canvas id="myChart1" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3>營運卓越</h3>
                    <canvas id="myChart2" width="100" height="100"></canvas>
                </div>
            </div>
            </div>
            <div class="col-md-6 p-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3>顧客體驗</h3>
                    <canvas id="myChart3" width="100" height="100"></canvas>
                </div>
            </div>
            </div>
            <div class="col-md-6 p-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3>商模再造</h3>
                    <canvas id="myChart4" width="100" height="100"></canvas>
                </div>
            </div>
            </div>
        </div>
    </div>
@endif
    <script>
        let dataArr = {!!$ques!!}
        console.log(dataArr);
        let d1d


        if ( dataArr["s3"] == 0 ) { d1d = 7; } else { d1d = 8; }
        let d1 = (dataArr["s1"] + dataArr["s2"] + dataArr["s3"] + dataArr["s4"] + dataArr["s5"] + dataArr["s6"] + dataArr["s7"] + dataArr["s8"]) / d1d;
        let d2 = (dataArr["s9"] + dataArr["s10"] + dataArr["s11"] + dataArr["s12"] + dataArr["s13"] + dataArr["s14"] + dataArr["s15"]) / 7;
        let d3 = (dataArr["s16"] + dataArr["s17"] + dataArr["s18"] + dataArr["s19"] ) / 4;

        console.log(d1);
        console.log(d2);
        console.log(d3);

        var data = {
            labels: [],
            datasets: [{
                label: '',
                data: [],
                fill: false,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
        };

        var data1 = {
            labels: [],
            datasets: [{
                label: '',
                data: [],
                fill: false,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
        };

        var data2 = {
            labels: [],
            datasets: [{
                label: '',
                data: [],
                fill: false,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
        };

        var data3 = {
            labels: [],
            datasets: [{
                label: '',
                data: [],
                fill: false,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
        };

        data.labels = ['營運卓越', '顧客體驗', '商模再造'];
        data.datasets[0].data = [1, 1, 1];
        var ctx = document.getElementById('myChart1');
        var myChart = new Chart(ctx, {
            type: 'radar',
            data: data,
            options: {
                scales: {
                    r: {
                        suggestedMin: 0,
                        suggestedMax: 5
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        data1.labels = ['採購活動', '設計活動', '生產活動', '銷售活動', '物流作業', '數位供應鏈', '協同與績效', '跨組織決策'];
        data1.datasets[0].data = [dataArr["s1"] , dataArr["s2"] , dataArr["s3"] , dataArr["s4"] , dataArr["s5"] , dataArr["s6"] , dataArr["s7"] , dataArr["s8"]];
        data1.labels = ['採購活動', '設計活動', '銷售活動', '物流作業', '供應鏈整合', '協同與績效', '跨組織決策'];
        data1.datasets[0].data = [dataArr["s1"] , dataArr["s2"] , dataArr["s4"] , dataArr["s5"] , dataArr["s6"] , dataArr["s7"] , dataArr["s8"]];

        var ctx2 = document.getElementById('myChart2');
        var myChart2 = new Chart(ctx2, {
            type: 'radar',
            data: data1,
            options: {
                scales: {
                    r: {
                        suggestedMin: 0,
                        suggestedMax: 5
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        data2.labels = ['輪廓資訊', '需求資訊', '市場情報', '行銷推廣', '線上銷售', '售前互動', '售後服務'];
        data2.datasets[0].data = [dataArr["s9"] , dataArr["s10"] , dataArr["s11"] , dataArr["s12"] , dataArr["s13"] , dataArr["s14"] , dataArr["s15"]];
        var ctx3 = document.getElementById('myChart3');
        var myChart3 = new Chart(ctx3, {
            type: 'radar',
            data: data2,
            options: {
                scales: {
                    r: {
                        suggestedMin: 0,
                        suggestedMax: 5
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        data3.labels = ['新產品服務', '新通路', '新市場', '新收益模式'];
        data3.datasets[0].data = [dataArr["s16"] , dataArr["s17"] , dataArr["s18"] , dataArr["s19"]];
        var ctx4 = document.getElementById('myChart4');
        var myChart4 = new Chart(ctx4, {
            type: 'radar',
            data: data3,
            options: {
                scales: {
                    r: {
                        suggestedMin: 0,
                        suggestedMax: 5
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>
</body>

</html>