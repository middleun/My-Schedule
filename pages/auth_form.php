<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization : 인증페이지</title>

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
    <link rel="stylesheet" href="/myschedule/css/reset.css"/>
    <style>
        .authWrap{width:100%; height:100vh; background:#F3F6FB; display:flex; justify-content:center; align-items:center;}
        .authForm input{width:200px; height:35px; border: 1px solid #5F75DF; outline:0; padding:5px; display:block; float:left; margin-right:5px;
        }       
        .authForm button{width:50px; height:35px; border:1px solid #5f75df; background:#5f75df; color:#fff; text-align:center;display:block; float:right;
            cursor:pointer;}
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