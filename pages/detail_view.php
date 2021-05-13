<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Schedule : 상세일정</title>

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
            $detail_num=$_GET['num'];

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

                <div class="item viewBox">

                    <?php
                        include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/db_conn.php";
                        $sql="select * from sch_txt where sch_txt_num=$detail_num";
                        
                        $board_result=mysqli_query($dbConn, $sql);

                        while($board_row=mysqli_fetch_array($board_result)){
                            $bo_num=$board_row['sch_txt_num'];
                            $bo_cat=$board_row['sch_txt_cat'];
                            $bo_tit=$board_row['sch_txt_tit'];
                            $bo_tit_str=str_replace("<br />","\r\n", $bo_tit);
                            $bo_reg=$board_row['sch_txt_reg'];
                            $bo_con=$board_row['sch_txt_con'];
                            $bo_con_str=str_replace("<br />","\r\n", $bo_con);
                            $bo_con_br=nl2br($bo_con);
                    ?>                                 
                        
                    <form action="/myschedule/php/detail_update.php?num=<?=$bo_num?>" method="post">
                        <div class="detailTit">
                            <h2><?=$bo_tit_st?></h2>
                            <input type="text" value="<?=$bo_tit_str?>" class="hiddenTit" name="updateTit">
                        </div>                        
                        <ul class="viewTable">
                            <li class="viewTitle">
                                <span class="boNum">번호</span>
                                <span class="boCat">종류</span>
                                <span class="boCon">내용</span>
                                <span class="boReg">작성일</span>
                            </li>                                                   
                            <li class="viewList">
                                <span class="boNum"><?=$bo_num?></span>
                                <span class="boCat"><?=$bo_cat?></span>
                                <span class="boCon">
                                    <em><?=$bo_con_br?></em>
                                    <textarea class="hiddenCon" name="updateCon"><?=$bo_con_str?></textarea>
                                </span>
                                <span class="boReg"><?=$bo_reg?>
                                    <div class="subBtn">
                                        <button type="submit">수정 사항 입력</button>
                                    </div>
                                </span>
                            </li>

                            <?php
                                }
                            ?>                                                  
                        </ul>
                    </form>
                </div>
                        
                <!-- grid down - button -  -->
                
                <div class="item btns">
                    <button type="button" class="updateConBtn">진행상황 수정</button>
                    <button type="button" onclick="confirmDel()">진행상황 삭제</button>
                    <button type="button" onclick="schConfirm()" class="schInput">진행 상황 확인</a>
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
        // confirm when click delete btn
        function confirmDel(){
        
            let isCheck=confirm('정말로 삭제하시겠습니까?')
            if(isCheck==false){
                return false;
            }else{                 
                location.href='/myschedule/php/detail_delete.php?num=<?=$bo_num?>';
            };
        };

        // confirm when click check btn 
        function schConfirm(){
            let confirmCheck=confirm("수정중인 내용이 있습니다. 페이지를 나가시겠습니까?");
            if(confirmCheck==false){
                return false;
            }else{
                location.href="/myschedule/pages/sch_view.php?key=view_all" 
            };
        };
        $("#clickTest").attr('onclick', '').unbind('click');

        // $(function(){
        //     if(!$(".updateConBtn").hasClass("on")){
        //         $(".schInput").attr("onclick","")
        //     }
        // });
    
    </script> 
   
    


</body>
</html>