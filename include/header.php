<?php

session_start();
if(isset($_SESSION['usercode'])){
    $usercode=$_SESSION['usercode'];
    setcookie('PHPSESSID','6allokb14h7tq1l5mu5il3od20', time()+ 10000, '/');

}else{
    echo"
        <script>
            location.href='/myschedule/pages/auth_form.php';
        </script>
    ";
}

?>



<header>
    <div class="center headerWrap">
    <a href="/myschedule/php/sign_out.php"><i class= "fa fa-sign-out-alt"></i></a>
        <h1 id="title"><a href="/myschedule/index.php">Schedule Dashboard</a></h1>
        <div class="mIcon">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="hiddenHeader">
            <ul class="depth-1">
                <li><a href="/myschedule/index.php"><i class="fa fa-home"></i></a></li>
                <li><a href="/myschedule/pages/input_form.php"><i class="fa fa-edit"></i></a></li>
                <li>
                    <a href="/myschedule/pages/sch_view.php?key=view_all"><i class="fa fa-calendar-check"></i></a>
                   
                </li>
            </ul>
        </div>


    </div>    
</header>

