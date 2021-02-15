<?php

 // database project latest date
 $db_date_sql="select * from sch_txt where sch_txt_cat='dbProject' order by sch_txt_num desc limit 1";
 $db_date_result=mysqli_query($dbConn, $db_date_sql);
 $db_date_row=mysqli_fetch_array($db_date_result);
 $db_date=$db_date_row['sch_txt_reg'];

 // api project latest date
 $api_date_sql="select * from sch_txt where sch_txt_cat='apiProject' order by sch_txt_num desc limit 1";
 $api_date_result=mysqli_query($dbConn, $api_date_sql);
 $api_date_row=mysqli_fetch_array($api_date_result);
 $api_date=$api_date_row['sch_txt_reg'];

 // echo $api_date;      

  // ren project latest date
  $ren_date_sql="select * from sch_txt where sch_txt_cat='renProject' order by sch_txt_num desc limit 1";
  $ren_date_result=mysqli_query($dbConn, $ren_date_sql);
  $ren_date_row=mysqli_fetch_array($ren_date_result);
  $ren_date=$ren_date_row['sch_txt_reg'];

   // web planning project latest date
   $pla_date_sql="select * from sch_txt where sch_txt_cat='plaProject' order by sch_txt_num desc limit 1";
   $pla_date_result=mysqli_query($dbConn, $pla_date_sql);
   $pla_date_row=mysqli_fetch_array($pla_date_result);
   $pla_date=$pla_date_row['sch_txt_reg'];         
   

?>