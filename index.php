<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Schedule</title>

    <!-- reset css link -->
    <link rel="stylesheet" href="/myschedule/css/reset.css"/>

    <!-- style css link -->
    <link rel="stylesheet" href="/myschedule/css/style.css"/>    
</head>

<body>
    <!-- all contents are wrapped inside wrap -->
    <div class="wrap">
        <header>
            <div class="center headerWrap">
                <span class="hollow"></span>
                <h1>Schedule Dashboard</h1>
                <div class="mIcon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
    
        </header>

        <!-- Container -->
        <div class="center">
            <div class="container">
                <div class="item">
                    <section class="graph-circle">
                        <div class="circle-graph-container">
                            <div class="circle-graph easyPieChart" data-percent="60" >
                            <p>60%</p>
                            <!-- <canvas width="269" height="269" style="width: 150px; height: 150px;"></canvas> -->
                            
                            </div>
                        </div>
                        <p class="totalTit">Total Process Rates</p>
                    </section>
                </div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <!-- <div class="item">G</div> -->
                <!-- <div class="item">H</div>
                <div class="item">I</div>
                <div class="item">J</div> -->

            </div>            
        </div>
        
    </div>
    
    <!-- script files load -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>

    <!-- pie chart jQuery link -->
    <script src="/myschedule/js/piechart.js"></script>

    
</body>
</html>