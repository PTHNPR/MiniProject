<!-- 세션 확인용 php-->

<?php
    session_start();
if (isset($_SESSION["userid"]))
    $userid = $_SESSION["userid"];
else
    $userid = "";
    $adminid = "";

if (isset($_SESSION["username"]))
    $username = $_SESSION["username"];
else
    $username = "";
    $adminname = "";
?>