<?php

  session_start();
  unset($_SESSION['usercode']);

  echo"
     <script>
       location.href='/myschedule/pages/auth_form.php';     
     </script>
  
  ";



?>
