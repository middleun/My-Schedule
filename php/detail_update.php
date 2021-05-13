<meta charset="UTF-8" />


<?php
    $update_num=$_GET['num'];
    $update_tit=$_POST['updateTit'];
    $update_tit=addslashes($update_tit);
    $update_con=$_POST['updateCon'];
    $update_con=addslashes($update_con);


    include $_SERVER['DOCUMENT_ROOT'].'/myschedule/include/db_conn.php';

    $sql="UPDATE sch_txt 
    SET sch_txt_tit='$update_tit', sch_txt_con='$update_con' WHERE sch_txt_num = '$update_num'";

    mysqli_query($dbConn, $sql);

    echo "
    <script>
      alert('수정이 완료되었습니다');
      location.href='/myschedule/pages/detail_view.php?num=$update_num';
    </script>
    ";
?>
