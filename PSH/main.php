<?php
require_once("php/noticeDBsql.php"); // 공지사항 쿼리문 (DB 연결 포함)

$boardSql = "select bCategory, bTitle, bUserNick, bDate, bGuId from boardTable order by bDate desc limit 20;";

$boardResult = mysqli_query($conn, $boardSql);

$boardArr = mysqli_fetch_all($boardResult);

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
                                <td class="t_title" id="t_title" onclick="location.href='selectBoard.php?num=<?= $boardArr[$i][4]; ?>'"><?= $boardArr[$i][1]; ?></td>
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