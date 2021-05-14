<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Schedule : 일정 확인</title>
    <!-- seo -->
    <meta name="keywords" content="일정관리, 일정등록, 일정수정, 일정삭제, 일정확인, 진행률 수정, 진행률 확인">
    <meta name="title" content="My Schedule:개인일정관리사이트">
    <meta name="subject" content="일정관리 사이트">
    <meta name="description" content="db를 활용하여 제작한 개인일정관리용 사이트로 일정관리, 일정등록, 일정수정, 일정삭제, 일정확인, 일정 진행률 수정, 진행률 확인 등의 기능이 가능합니다.">
    <meta name="author" content="eunallaco@gmail.com, 이중은">
    <meta name="robots" content="index,follow">
    <meta name="copyright" content="copyrights 2021 LEEJUNGEUN.">

    <!-- open graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="My Schedule:개인일정관리사이트">
    <meta property="og:description" content="db를 활용하여 일정 진행률 수정과 확인, 일정관리가 가능한 개인 일정관리용 사이트입니다.">
    <meta property="og:image" content="http://middleun.dothome.co.kr/myschedule/img/myschedule_og_img.png">
    <meta property="og:url" content="https://middleun.dothome.co.kr/myschedule">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- favicon link -->
    <link rel="icon" href="/myschedule/img/favicon_32x32.png"/>

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
         $sql="select * from sch_progress";

         $sch_result=mysqli_query($dbConn, $sql);
         $sch_row=mysqli_fetch_array($sch_result);

         $sch_db=$sch_row['sch_db'];
         $sch_api=$sch_row['sch_api'];
         $sch_ren=$sch_row['sch_ren'];
         $sch_web=$sch_row['sch_web'];
        ?>

        <!-- Container -->
        <div class="center gridWrap">
            
            <div class="inputContainer">
                <!-- grid up -total and each project progress- -->
                <?php 
                include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/latest_date.php";                     
                include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/grid_up.php";
                ?>

                <div class="item boardBox">
                    <?php 
                        $include_path=$_GET['key'];
                        include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/$include_path.php";
                    ?>                  
                </div>
                        
                <!-- grid down - button -  -->
                
                <div class="item btns">
                    <a href="/myschedule/pages/input_form.php" class="schInput">일정 작성</a>                    
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
        $(".boardList").hide();
        $(".boardList").slice(0,5).show();

        $(".loadMore button").click(function(){
            $(".boardList:hidden").slice(0,5).show();
            // 가려진 것 중에 0부터 5개를 보여줌
        });

    </script>

   
    


</body>
</html>