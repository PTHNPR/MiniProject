<?php
session_start();
require_once("php/connDB.php");

$boardNum = $_GET["num"];
$Category = $_GET["Category"];
$sql = "";

if($Category === "공지"){
    $sql = "select nGuId AS bGuId, nAdminId AS nUserId, nTitle AS bTitle, nContext AS bContext, ";
    $sql .= "nAdminNick AS bUserNick, nDate AS bDate from noticeTable where nGuId = $boardNum;";
}
else{
    $sql = "select * from boardTable where bGuId = $boardNum;";
}
$result = mysqli_query($conn, $sql);
$boardArr = mysqli_fetch_assoc($result);

//반환 형태 : array(7) { ["bGuId"]=> string(1) "2" ["bUserId"]=> string(7) "test123" 

?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>게시물 보기</title>
        <link rel="stylesheet" href="css/selectBoard.css">
    </head>
    <body>
        <?php require_once("php/header.php");  ?> <!-- 헤더 파일 -->
        <container class="board_view_container">
            <div class="board_view_div">
                <div class="board_view_upper">
                    <span><?= $boardArr["bTitle"] ?></span>
                </div>
                <div class="board_view_center">
                    <span><?= $boardArr["bUserNick"] ?></span>
                    <span><?= $boardArr["bDate"] ?></span>
                </div>
                <div class="board_view_under"><?= $boardArr["bContext"] ?></div>
            </div>
            <div class="board_btn_div">
                <!-- <button type="button" >삭제하기</button> --> 
                <button type="button" onclick="location.href='updateBoard.php?num=<?= $boardArr['bGuId']; ?>&Category=<?= $Category; ?>'">수정하기</button>
            </div>
        </container>
    </body>
</html>