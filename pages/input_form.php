<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Board</title>


    <!-- awesomefont cdn link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!-- reset css link -->
    <link rel="stylesheet" href="/myschedule/css/reset.css"/>

    <!-- style css link -->
    <link rel="stylesheet" href="/myschedule/css/style.css"/>    

    <!-- media css link -->
    <link rel="stylesheet" href="/myschedule/css/media.css"/>    
    
</head>

<body>
    <!-- all contents are wrapped inside wrap -->
    <div class="wrap">

        <!-- header -->
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/header.php";?>
      

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
        <div class="center gridWrap">
            
                <div class="inputContainer">
                    <!-- grid up -total and each project progress- -->
                    <?php 

                    include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/latest_date.php";                     
                    include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/grid_up.php";
                    ?>


                    <div class="item inputBox">
                        <form action="/myschedule/php/schedule_input.php" method="post" name="schInputForm" >
                            <select name="projectCate"  class="projectCate">
                                <option value="dbProject">Database Project</option>
                                <option value="apiProject">API Project</option>
                                <option value="renProject">Renewal Project</option>
                                <option value="plaProject">Web Planning Project</option>
                                
                            </select>
                            <input type="text" name="projectTit" class="projectTit" placeholder="일정 제목을 입력해주세요">
                            <textarea name="projectCon"  class="projectCon" placeholder="일정 상세 내용을 입력해주세요"></textarea>
                        </form>

                    </div>
                          
                    <!-- grid down - button -  -->
                    
                    <div class="item btns">
                        <button type="button" onclick="schInput()">진행 상황 작성</button>
                        <button type="button" onclick="javascript:location.href='/myschedule/pages/sch_view.php?key=view_all'">진행 상황 확인</button>
                    </div>

                  

                </div>
                <!-- end of container -->


         

        </div>
        <!--end of center  -->

        <!-- footer -->
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/footer.php";?>
        
     
    </div>
    <!-- end of wrap -->

    <!-- script files load -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>

    <!-- pie chart jQuery link -->
    <script src="/myschedule/js/piechart.js"></script>

    <!-- main jQuery link -->
    <script src="/myschedule/js/custom.js"></script>

    <script src="/myschedule/js/total_avg.js"></script>

    <script>
        function schInput(){
            if(!document.schInputForm.projectTit.value){
                alert('일정 제목을 입력해주세요');
                document.schInputForm.projectTit.focus();
                return false;
            }
            if(!document.schInputForm.projectCon.value){
                alert('일정 상세 내용을 입력해주세요');
                document.schInputForm.projectCon.focus();
                return false;
            }    
            
            document.schInputForm.submit();
            
        }
    </script>

    


</body>
</html>