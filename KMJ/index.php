<!-- 웹 페이지에서 로그인 상태 판별하기 -->
<!-- 구현하고 싶은 것은 로그인과 로그아웃 처리 -->

<?php
    session_start();
if (isset($_SESSION["userid"]))
    $userid = $_SESSION["userid"];
else
    $userid = "";

if (isset($_SESSION["username"]))
    $username = $_SESSION["username"];
else
    $username = "";
?>
<!DOCTYPE html>
<html>
<head>
    <meta>
    <title>로그인 판별</title>
</head>
<body>
    <div class="header">
        <div class="top">
<?php
    if(!$userid){
?>
        <span><a href="signIn.php">로그인</a></span>
<?php
    } else {
        $logged = $username."(".$userid.")";
?> 
        <span><?=$logged?></span>
        <span> | </span>
        <span><a href="logout.php">로그아웃</a></span>
<?php       
    }
?>
        </div>
    </div>

</body>
</html>








