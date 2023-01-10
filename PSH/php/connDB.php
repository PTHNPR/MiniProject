<?php

$dbServName = "localhost";          // 서버 이름
$dbUserName = "PSH";                // 사용자명
$dbPassWord = "123456";             // 비밀번호
$dbName = "miniproject";            // DB이름

$conn = mysqli_connect($dbServName, $dbUserName, $dbPassWord, $dbName); // DB연결

?>