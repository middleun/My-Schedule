<meta charset="UTF-8" />


<?php
    $sch_num=1;
    $sch_db=$_REQUEST['sch_db_rate'];
    $sch_api=$_REQUEST['sch_api_rate'];
    $sch_ren=$_REQUEST['sch_ren_rate'];
    $sch_pla=$_REQUEST['sch_pla_rate'];

    // echo $sch_db, $sch_api, $sch_ren, $sch_pla;


    include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/db_conn.php";
    $sql="UPDATE schedule_progress SET sch_db=$sch_db, sch_api=$sch_api, sch_ren=$sch_ren, sch_pla=$sch_pla
    where sch_num=$sch_num";

    mysqli_query($dbConn, $sql);

   

    // cf. gold project에서 app_update.php 참고 / json파일 연결해야하므로 한 번 더 써줘야 데이터 갱신
    $sql="select * from schedule_progress where sch_num=$sch_num";


    $sch_result= mysqli_query($dbConn, $sql);
    
    // 비어있는 배열을 하나 만들어서 
    $arr=array();

    // array push로 비어있는 배열에 값을 넣어줌 
    while($sch_row=mysqli_fetch_array($sch_result)){
        array_push($arr, array(
            'db_rate' => $sch_row['sch_db'],
            'api_rate' => $sch_row['sch_api'],
            'ren_rate' => $sch_row['sch_ren'],
            'pla_rate' => $sch_row['sch_pla']
            
        ));
    }

     //   make json file
     file_put_contents($_SERVER['DOCUMENT_ROOT'].'/myschedule/data/sch_rate.json',json_encode($arr, JSON_PRETTY_PRINT));
    //  encode와 decode의 차이???머지?
    //  다른 파일을 json으로 바꿀 때는 encode 


    echo"
    <script>
        alert('수정이 완료되었습니다');
        location.href='/myschedule/index.php';
    </script>
    ";   



?>