<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    @include('partial.head')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    @include('partial.left-side')
    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        @include('partial.navbar')
        <!-- end Navbar -->

        <!--Chart Start-->
        <div
            class="justify-center mx-auto p-4 mt-0 border border-gray-100 rounded-lg bg-gray-50 grid grid-cols-1 xl:grid-cols-3 md:grid md:grid-cols-2 space-y-3 space-x-3 text-center">
            <html>

            <head>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                        var data = google.visualization.arrayToDataTable([
                            ['Hasil', 'Total'],
                            <?php echo $chartdata1; ?>
                        ]);

                        var options = {
                            title: 'Data Hasil Suspek Campak'
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data, options);
                    }
                </script>
            </head>

            <body>
                <div id="piechart" style="width: 350px;"></div>
            </body>

            </html>

            <html>

            <head>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load("current", {
                        packages: ["corechart"]
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Hasil', 'Total'],
                            <?php echo $chartdata3; ?>
                        ]);

                        var options = {
                            title: 'Jumlah Data Penyakit',
                            is3D: true,
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                        chart.draw(data, options);
                    }
                </script>
            </head>

            <body>
                <div id="piechart_3d" style="width: 350px;"></div>
            </body>

            </html>

            <html>

            <head>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load("current", {
                        packages: ["corechart"]
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Hasil', 'Total'],
                            <?php echo $chartdata2; ?>
                        ]);

                        var options = {
                            title: 'Data Hasil Suspek Difteri',
                            pieHole: 0.4,
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                        chart.draw(data, options);
                    }
                </script>
            </head>

            <body>
                <div id="donutchart" style="width: 350px;"></div>
            </body>

            </html>
        </div>

        <div class="grid xl:grid-cols-2 md:grid-cols-1 gap-4">

            <div class="bg-white rounded-xl p-4">
                <p>Grafik Suspek AFP</p>
                <canvas id="suspekafp" width="100" height="50"></canvas>
            </div>

            <div class="bg-white rounded-xl p-4">
                <p>Grafik Suspek Campak</p>
                <canvas id="suspekcampak" width="100" height="50"></canvas>
            </div>

            <div class="bg-white rounded-xl p-4">
                <p>Grafik Suspek Difteri</p>
                <canvas id="suspekdifteri" width="100" height="50"></canvas>
            </div>

            <div class="bg-white rounded-xl p-4">
                <p>Grafik Keracunan Makanan</p>
                <canvas id="racun" width="100" height="50"></canvas>
            </div>
        </div>
        <!--Chart Ends-->
    </main>
</body>
@include('partial.footer')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    var labels1 = {{ Js::from($labels) }};
    var data1 = {{ Js::from($data) }};

    // Chart 1
    var data1 = {
        labels: labels1,
        datasets: [{
            label: 'Suspek Afp',
            data: data1,
            borderColor: 'rgb(75, 192, 192)',
            fill: true,
        }]
    };

    var config1 = {
        type: 'line',
        data: data1,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            scales: {
                y: {
                    min: 0,
                    max: 50,
                }
            }
        }
    };

    var chart1 = new Chart(
        document.getElementById('suspekafp'),
        config1
    );

    // Chart 2
    var labels2 = {{ Js::from($labels2) }};
    var data2 = {{ Js::from($data2) }};

    var data2 = {
        labels: labels2,
        datasets: [{
            label: 'Suspek Campak',
            data: data2,
            borderColor: 'rgb(75, 192, 192)',
            fill: true,
        }]
    };

    var config2 = {
        type: 'line',
        data: data2,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            scales: {
                y: {
                    min: 0,
                    max: 50,
                }
            }
        }
    };

    var chart2 = new Chart(
        document.getElementById('suspekcampak'),
        config2
    );

    // Chart 3
    var labels3 = {{ Js::from($labels3) }};
    var data3 = {{ Js::from($data3) }};

    var data3 = {
        labels: labels3,
        datasets: [{
            label: 'Suspek Difteri',
            data: data3,
            borderColor: 'rgb(75, 192, 192)',
            fill: true,
        }]
    };

    var config3 = {
        type: 'line',
        data: data3,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            scales: {
                y: {
                    min: 0,
                    max: 50,
                }
            }
        }
    };

    var chart3 = new Chart(
        document.getElementById('suspekdifteri'),
        config3
    );

    // Chart 4
    var labels4 = {{ Js::from($labels4) }};
    var data4 = {{ Js::from($data4) }};

    var data4 = {
        labels: labels4,
        datasets: [{
            label: 'Keracunan Makanan',
            data: data4,
            borderColor: 'rgb(75, 192, 192)',
            fill: true,
        }]
    };

    var config4 = {
        type: 'line',
        data: data4,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            scales: {
                y: {
                    min: 0,
                    max: 50,
                }
            }
        }
    };

    var chart4 = new Chart(
        document.getElementById('racun'),
        config4
    );
</script>
</html>
