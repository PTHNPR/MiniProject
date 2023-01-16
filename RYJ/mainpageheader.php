//메인페이지헤더
<?php
    session_start();

    if (isset($_SESSION["userid"])) 
        $userid = $_SESSION["userid"];
    else {
        $userid = "";
    }
    
    if (isset($_SESSION["username"])) 
        $username = $_SESSION["username"];
    else 
        $username = "";
    
    if (isset($_SESSION["userlevel"])) 
        $userlevel = $_SESSION["userlevel"];
    else 
        $userlevel = "";
?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>사이트이름</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <h3 class="logo">
        <a href="../main/index.php">사이트이름</a>
    </h3>
    <ul class="top_menu">
<?php
    if(!$userid) {
        echo "<li> </li>";
    }
    else {
        $logged = $username."(Level:".$userlevel.")님 환영합니다. ";
        echo "<li>$logged</li>";
    }
?>
    </ul> <!-- top_menu -->

    <ul class="main_menu">
<?php
    if(!$userid) {
?>
        <li><a href="../member/index.php?type=login_form">Log In</a></li>
<?php
    } else {
?>
        <li><a href="../member/logout.php">로그아웃</a> </li>
        <li><a href="../member/index.php?type=modify_form">정보 수정</a></li>
<?php
    }
?>
   <li><a href="../mboard/index.php?type=list&table=_qna">전체</a></li>
    <li><a href="../mboard/index.php?type=list&table=_notice">공지사항</a></li>
    <li><a href="../mboard/index.php?type=list&table=_qna">자유</a></li>
    <li><a href="../mboard/index.php?type=list&table=_youtube">Study</a></li>
    </ul> <!-- main_menu -->
</header>