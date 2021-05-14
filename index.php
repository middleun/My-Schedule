<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=no,
    maximun-scale=1;>
    <title>My Schedule: 개인일정관리사이트</title>

    <!-- seo -->
    <meta name="keywords" content="일정관리, 일정등록, 일정수정, 일정삭제, 일정확인, 진행률 수정, 진행률 확인">
    <meta name="title" content="개인 일정관리용 사이트, my schedule">
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
    <link rel="icon" href="./img/favicon_32x32.png"/>

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
            <form action="/myschedule/php/update_rate.php" method="get" name="updateRate">
                <div class="container">

                <!-- grid up -total and each project progress- -->

                    <?php
                      include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/latest_date.php";                                               
                      include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/grid_up.php";        
                    ?>
                          
                    <!-- grid down - button -  -->
                    
                    <div class="item btns">
                        <button type="button" onclick="updateSubmit()">진행률 수정</button>
                        <button type="button" onclick="javascript:location.href='/myschedule/pages/input_form.php'">일정 작성</button>
                        <button type="button" onclick="javascript:location.href='/myschedule/pages/sch_view.php?key=view_all'">일정 목록</button>
                    </div>
                </div>
                <!-- end of container -->

            </form>    
            <!--end of form table  -->

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
        function updateSubmit(){
            if(document.updateRate.sch_db_rate.value>100){
                alert("100이하의 숫자를 입력하세요");
                document.updateRate.sch_db_rate.focus();
                return;
            }
            if(document.updateRate.sch_api_rate.value>100){
                alert("100이하의 숫자를 입력하세요");
                document.updateRate.sch_api_rate.focus();
                return;
            }
            if(document.updateRate.sch_ren_rate.value>100){
                alert("100이하의 숫자를 입력하세요");
                document.updateRate.sch_ren_rate.focus();
                return;
            }
            if(document.updateRate.sch_web_rate.value>100){
                alert("100이하의 숫자를 입력하세요");
                document.updateRate.sch_web_rate.focus();
                return;
            }

            document.updateRate.submit();
        }
    </script>


</body>
</html>