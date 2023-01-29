<?php
session_start();
require_once("php/noticeDBsql.php"); // 공공지사항 쿼리문 (DB 연결 포함)

$boardSql = "select bCategory, bGuId, bTitle, bUserNick, bDate from boardTable order by bDate desc;";

$boardResult = mysqli_query($conn, $boardSql);

$boardArr = mysqli_fetch_all($boardResult);

$boardLen = mysqli_num_rows($boardResult);
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>전체게시판</title>
        <link rel="stylesheet" href="css/commonBoard.css">
        <script src="js/boardJs.js"></script>
    </head>
    <body> 
        <?php require_once("php/header.php");  ?> <!-- 헤더 파일 -->
        <container class="main_container">
            <div class="board_div">
                <div class="board_title">
                    <span>전체게시판</span>
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
                                <td class="t_title" id="t_title" onclick="location.href='selectBoard.php?num=<?= $boardArr[$i][1]; ?>&Category=<?= $boardArr[$i][0] ?>'"><?= $boardArr[$i][2]; ?></td>
                                <td class="t_nick"><?= $boardArr[$i][3]; ?></td>
                                <td class="t_date"><?= $boardArr[$i][4]; ?></td>
                            </tr>
                            <?php
                            };
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="insertBoard_btn_div">
                    <?php
                        if(isset($_SESSION["uGuId"])){ ?>
                            <button type="button" class="insertBoard_btn" onclick="location.href='insertBoard.php?Category=전체'" >글 작성</button>
                    <?php } else { ?>
                            <button type="button" class="insertBoard_btn" onclick="signInComf()">글 작성</button>
                    <?php };?>    
                </div>
            </div>
        </container>
    </body>
</html>