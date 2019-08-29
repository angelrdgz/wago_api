@extends('layouts.admin')

@section('content')
<h3 class="mt-4">Hola {{Auth::user()->name}}</h3>
<h5 class="text-muted">Dashboard</h5>
<div class="row">
    <div class="col-sm-12 col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <canvas id="myChartPie"></canvas>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-7">
        <div class="card">
            <div class="card-body">
                <canvas id="myChart" style="max-height:410px;"></canvas>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-7">
        <div class="card">
            <div class="card-header">
                <h5 class="text-muted">Tráfico validaciones socios</h5>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="card">
            <div class="card-header">
                <h5 class="text-muted">Bandeja de Entrada</h5>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var ctx = document.getElementById('myChart').getContext("2d")
    var ctxPie = document.getElementById('myChartPie').getContext("2d")

    var myPieChart = new Chart(ctxPie, {
        type: 'doughnut',
        data: {
            datasets: [{
                fill: true,
                backgroundColor: [
                    '#103681',
                    '#0075bf',
                    '#3490dc'
                ],
                data: [10, 25, 70]
            }],
            labels: [
                'Usuarios',
                'En proceso',
                'Descargas'
            ]
        },
        options: []
    });

    var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(1, "#0075BF");
    gradientStroke.addColorStop(0.5, "#04BB48");
    gradientStroke.addColorStop(0, "#103681");

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["abril", "mayo", "junio", "julio", "agosto", "septiembre"],
            datasets: [{
                label: "Data",
                borderColor: gradientStroke,
                pointBorderColor: gradientStroke,
                pointBackgroundColor: gradientStroke,
                pointHoverBackgroundColor: gradientStroke,
                pointHoverBorderColor: gradientStroke,
                pointBorderWidth: 10,
                pointHoverRadius: 10,
                pointHoverBorderWidth: 1,
                pointRadius: 0,
                fill: false,
                borderWidth: 4,
                data: [100, 220, 180, 370, 340, 570, 360, 450]
            }]
        },
        options: {
            legend: {
                position: "bottom"
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "bold",
                        beginAtZero: true,
                        maxTicksLimit: 5,
                        padding: 20
                    },
                    gridLines: {
                        drawTicks: false,
                        display: false
                    }
                }],
                xAxes: [{
                    gridLines: {
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        padding: 20,
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "bold"
                    }
                }]
            }
        }
    });
</script>
@endsection