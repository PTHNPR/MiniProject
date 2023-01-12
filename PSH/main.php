<?php
require_once("php/connDB.php"); // DB연결 파일을 불러온다, (사용 후 mysqli_close($conn); 권장  : db와 연결을 끊는다)

$noticeSql = "select nTitle, nAdminNick, nDate from noticeTable order by nDate desc limit 3;";
$boardSql = "select bCategory, bTitle, bUserNick, bDate from boardTable order by bDate desc limit 20;";

$noticeResult = mysqli_query($conn, $noticeSql);
$boardResult = mysqli_query($conn, $boardSql);

$noticeArr = mysqli_fetch_all($noticeResult);
$boardArr = mysqli_fetch_all($boardResult);

$noticeLen = mysqli_num_rows($noticeResult);
$boardLen = mysqli_num_rows($boardResult);

?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>메인</title>
        <script src="js/mainBoard.js"></script>
        <link rel="stylesheet" href="css/commonBoard.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body> 
        <?php require_once("php/header.php");  ?> <!-- 헤더 파일 -->
        <container class="main_container">
            <div class="board_div">
                <div class="board_title">
                    <span>최신 글</span>
                </div>
                <?php require_once("php/commonNotice.php");  ?> <!-- 공통 공지사항 파일 -->
                <div class="user_boardDiv">
                    <table class="user_boardTable">
                        <tbody>
                            <?php 
                            for($i = 0; $i < $boardLen; $i++){       
                            ?>
                            <tr>
                                <td class="t_category"><?= $boardArr[$i][0] ?></td>
                                <td class="t_title" id="t_title"><?= $boardArr[$i][1]; ?></td>
                                <td class="t_nick"><?= $boardArr[$i][2]; ?></td>
                                <td class="t_date"><?= $boardArr[$i][3]; ?></td>
                            </tr>
                            <?php
                            };
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </container>
    </body>
</html>