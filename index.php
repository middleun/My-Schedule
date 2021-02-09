<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Schedule</title>

<<<<<<< HEAD
    <!-- awesomefont cdn link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

=======
>>>>>>> 6e6de96b8206d7df20eb4416a82fffd8561adbba
    <!-- reset css link -->
    <link rel="stylesheet" href="/myschedule/css/reset.css"/>

    <!-- style css link -->
    <link rel="stylesheet" href="/myschedule/css/style.css"/>    
<<<<<<< HEAD


    <!-- media css link -->
    <link rel="stylesheet" href="/myschedule/css/media.css"/>    

    

=======
>>>>>>> 6e6de96b8206d7df20eb4416a82fffd8561adbba
</head>

<body>
    <!-- all contents are wrapped inside wrap -->
    <div class="wrap">
<<<<<<< HEAD
        <!-- header -->
=======
>>>>>>> 6e6de96b8206d7df20eb4416a82fffd8561adbba
        <header>
            <div class="center headerWrap">
                <span class="hollow"></span>
                <h1>Schedule Dashboard</h1>
                <div class="mIcon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
<<<<<<< HEAD
            </div>    
        </header>

        <?php
         include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/db_conn.php";
         $sql="select * from schedule_progress";

         $sch_result=mysqli_query($dbConn, $sql);
         $sch_row=mysqli_fetch_array($sch_result);

         $sch_db=$sch_row['sch_db'];
         $sch_api=$sch_row['sch_api'];
         $sch_ren=$sch_row['sch_ren'];
         $sch_pla=$sch_row['sch_pla'];
        ?>

        <!-- Container -->
        <div class="center">
            <form action="" method="get" name="updateRate">
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

                    

                        <div class="item subPfBar">
                            <div class="pfImg">
                                <i class="fa fa-database"></i>
                            </div>
                            <div class="pfContents">
                                <h3>Database Project</h3>
                                <p>Progress Rate : <input type="text" value="<?=$sch_db?>" class="rateNum">% || Last Update : <b>2021-02-09</b></p>
                                <div class="pfBarBox">
                                    <span class="pfBar"></span>
                                </div>
                            </div>
                        </div>
                    
                        <div class="item subPfBar">  
                            <div class="pfImg">
                                <i class="fa fa-cloud-sun"></i>
                            </div>
                            <div class="pfContents">
                                <h3>API Project</h3>
                                <p>Progress Rate : <input type="text" value="<?=$sch_api?>" class="rateNum">% || Last Update : <b>2021-02-09</b></p>
                                <div class="pfBarBox">
                                    <span class="pfBar"></span>
                                </div>
                            </div>                 
                        </div>
                        <div class="item subPfBar">
                            <div class="pfImg">
                                <i class="fa fa-clone"></i>
                            </div>
                            <div class="pfContents">
                                <h3>Renewal Project</h3>
                                <p>Progress Rate : <input type="text" value="<?=$sch_ren?>" class="rateNum">% || Last Update : <b>2021-02-09</b></p>
                                <div class="pfBarBox">
                                    <span class="pfBar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item subPfBar">
                            <div class="pfImg">
                                <i class="fa fa-chart-bar"></i>
                            </div>
                            <div class="pfContents">
                                <h3>Web Planning Project</h3>
                                <p>Progress Rate : <input type="text" value="<?=$sch_pla?>" class="rateNum">% || Last Update : <b>2021-02-09</b></p>
                                <div class="pfBarBox">
                                    <span class="pfBar"></span>
                                </div>
                            </div>
                        </div>
               
                        </form>      
                        <div class="item btns">
                            <button type="button">진행상황 확인</button>
                            <button type="button">진행상황 수정</button>
                            <button type="button">진행상황 삭제</button>
                        </div>
                </div>
                    
=======
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
>>>>>>> 6e6de96b8206d7df20eb4416a82fffd8561adbba
        </div>
        
    </div>
    
    <!-- script files load -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>

    <!-- pie chart jQuery link -->
    <script src="/myschedule/js/piechart.js"></script>

<<<<<<< HEAD
    <!-- main jQuery link -->
    <script src="/myschedule/js/custom.js"></script>
=======
>>>>>>> 6e6de96b8206d7df20eb4416a82fffd8561adbba
    
</body>
</html>