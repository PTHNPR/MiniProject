<?php
require_once("php/connDB.php"); // DB연결 파일을 불러온다, (사용 후 mysqli_close($conn); 권장  : db와 연결을 끊는다)

$sql = 'select * from boardTable;';

$result = mysqli_query($conn, $sql);

$boardArr = mysqli_fetch_all($result);

$boardArrLen = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title></title>
        <script src="js/mainBoard.js"></script>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body> 
        <?php require_once("php/header.php");  ?> <!-- 헤더 파일 -->
        <container class="main_container">
            <div class="table_container">
                <div>최신 글</div>
                <table class="main_noticeBorder">
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>작성자</th>
                            <th>날짜</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $num = $boardArrLen;

                        for($i = 0; $i < $boardArrLen; $i++){
                                

                        ?>
                            <tr>
                                <td><?= $num ?></td>
                                <td><?= $boardArr[$i][1]; ?></td>
                                <td><?= $boardArr[$i][3]; ?></td>
                                <td><?= $boardArr[$i][4]; ?></td>
                            </tr>
                        <?php
                            $num--;
                        };

                        mysqli_close($conn);

                        ?>
                    </tbody>
                </table>
            </div>
        </container>
    </body>
</html>