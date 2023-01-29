<?php
session_start();
require_once("php/connDB.php"); // DB연결 파일을 불러온다, (사용 후 mysqli_close($conn); 권장  : db와 연결을 끊는다)

$noticeSql = 'select nGuId, nTitle, nAdminNick, nDate from noticeTable order by nDate desc;';

$noticeResult = mysqli_query($conn, $noticeSql);

$noticeArr = mysqli_fetch_all($noticeResult);

$noticeLen = mysqli_num_rows($noticeResult);

?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>공지사항</title>
        <link rel="stylesheet" href="css/commonBoard.css">
    </head>
    <body> 
        <?php require_once("php/header.php");  ?> <!-- 헤더 파일 -->
        <container class="main_container">
            <div class="board_div">
                <div class="board_title">
                    <span>공지사항</span>
                </div>
                <div class="table_division">
                    <div class="t_category">구 분</div>
                    <div class="t_title" id="t_title" style="text-align: center;">제 목</div>
                    <div class="t_nick">작성자</div>
                    <div class="t_date">날 짜</div>
                </div>
                <div class="notice_board">
                    <table class="common_board_table">
                        <tbody>
                        <?php 
                            $count = $noticeLen;

                            for($i = 0; $i < $noticeLen; $i++){       
                            ?>
                            <tr>
                                <td class="t_category"><?= $count ?></td>
                                <td class="t_title" id="t_title" onclick="location.href='selectBoard.php?num=<?= $noticeArr[$i][0]; ?>&Category=공지'"><?= $noticeArr[$i][1]; ?></td>
                                <td class="t_nick"><?= $noticeArr[$i][2]; ?></td>
                                <td class="t_date"><?= $noticeArr[$i][3]; ?></td>
                            </tr>
                        <?php 
                                $count--;
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