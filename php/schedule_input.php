<meta charset="UTF-8" />


<?php

$sch_cate=$_POST['projectCate'];
$sch_tit=nl2br($_POST['projectTit']);
$sch_tit=addslashes($sch_tit);
$sch_con=nl2br($_POST['projectCon']);
$sch_con=addslashes($sch_con);
$sch_reg=date("Y-m-d");

// nl2br - 개행문자 처리 오류 방지 
// addslashes - 특수문자 처리 오류 방지

include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';

$sql="insert into sch_txt(sch_txt_cat, sch_txt_tit, sch_txt_con, sch_txt_reg )   
values('$sch_cate','$sch_tit','$sch_con', '$sch_reg')";

mysqli_query($dbConn, $sql);

echo "
<script>
    alert('작성이 완료되었습니다');
  location.href='/myschedule/index.php';
</script>
"


  

?>