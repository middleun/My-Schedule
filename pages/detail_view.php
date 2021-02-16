<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Board</title>


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


                    <div class="item viewBox">

                            <?php
                                include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/db_conn.php";
                                $sql="select * from sch_txt where sch_txt_num=$detail_num";

                                
                                $board_result=mysqli_query($dbConn, $sql);


                                while($board_row=mysqli_fetch_array($board_result)){
                                    $bo_num=$board_row['sch_txt_num'];
                                    $bo_cat=$board_row['sch_txt_cat'];
                                    $bo_tit=$board_row['sch_txt_tit'];
                                    $bo_reg=$board_row['sch_txt_reg'];
                                    $bo_con=$board_row['sch_txt_con'];

                            ?>            

                        <div class="detailTit">
                            <h2><?=$bo_tit?></h2>
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
                                <span class="boCon"><em><?=$bo_con?></em></a></span>
                                <span class="boReg"><?=$bo_reg?></span>
                            </li>

                            <?php
                                }
                            ?>
                            
                          
                        </ul>

                    </div>
                          
                    <!-- grid down - button -  -->
                    
                    <div class="item btns">
                        <button type="button">진행상황 수정</button>
                        <button type="button" onclick="confirmDel()">진행상황 삭제</button>
                        <a href="/myschedule/pages/sch_view.php?key=view_all" class="schInput">진행 상황 확인</a>
                        
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
        function confirmDel(){
        
            let isCheck=confirm('정말로 삭제하시겠습니까?')
            if(isCheck==false){
                return false;
            }else{                 
                location.href='/myschedule/php/detail_delete.php?num=<?=$bo_num?>';
            }
        }
    </script> 
   
    


</body>
</html>