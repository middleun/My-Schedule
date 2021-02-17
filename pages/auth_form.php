<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>

    <!-- awesomefont cdn link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="/myschedule/css/reset.css"/>
    <style>
        .authWrap{width:100%; height:100vh; background:#F3F6FB; display:flex; justify-content:center; align-items:center;}

        .authForm input{width:200px; height:35px; border: 1px solid #5F75DF; outline:0; padding:5px; display:block; float:left; margin-right:5px;
        }
       
        .authForm button{width:50px; height:35px; border:1px solid #5f75df; background:#5f75df; color:#fff; text-align:center;display:block; float:right;
            cursor:pointer;}
        /* .authForm button[type="submit"] {font-family:FontAwesome;} */
        .authForm button i{display:block; font-size:25px; color:#fff; display:flex; justify-content:center; align-items:center;}
    </style>
</head>
<body>

    <div class="authWrap">
        <form action="/myschedule/php/auth.php" name="authForm" class="authForm">
            <input type="password" placeholder="인증 코드를 입력해 주세요" name="authCode">
            <button type="submit"><i class="fa fa-sign-in-alt"></i></button>
        </form>

    </div>
    
</body>
</html>