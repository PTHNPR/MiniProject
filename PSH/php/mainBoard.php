<?php
require_once("connDB.php"); // DB연결 파일을 불러온다, (사용 후 mysqli_close($conn); 권장  : db와 연결을 끊는다)

$sql = 'select * from boardTable;';

$result = mysqli_query($conn, $sql);

$boardArr = mysqli_fetch_array($result);

$boardArrLen = mysqli_num_rows($result);

?>