<!-- 세션적용 유무 확인 -->
<?php
include "findIdLogic.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>answerIdPage</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- 전체 배너 -->
    <div class="main_wrap">
    <!-- 헤드 배너 전체 구역 -->
    <div class="header_wrap">
    <!-- 사이트 이름 칸 -->
    <div class="site">
        <a href="main.php"  class="site_text" style="color: black; font-size: 50px;">사이트 이름</a>
    </div>
    <!-- 로그인 버튼 -->
    <div class="box">
        
<!--로그인 상태 판별 창-->
<?php
    if(!$userid) {
?>
        <a href="signIn.php">로그인</a>
<?php       
    } else {
?>
        <a href="signIn.php">로그아웃<?=$userid?></a>
<?php
    }
?>

    </div>
    <!-- 카테고리 -->
    <div class="menu_wrap">
            <a class="item" href="main.php">전체게시판</a>
            <a class="item" href="noticeBoard.php">공지사항</a>
            <a class="item" href="freeBoard.php">자유</a>
            <a class="item" href="studyBoard.php">Study</a>
    </div>
    </div>
    <!-- 900 경계구역 양측 200px ##게시판 + 공지사항+ 글-->
    <!--전체 감싸기-->
    <div class="content_wrap">  
        <!--게시판 이름-->
        <div class="content_banner">
            <p class="banner_text">아이디 찾기/p>
        </div>
        <!--공지사항 + 게시글 구역-->
        
        
        <div class="not_pos_wrap">
        
            <!--아이디 찾기 -->
            <p>회원님의 아이디는 <?=$email?></p>

        </div>
    </div>
    </div>
</body>
</html>
