<?php
require_once("php/connDB.php"); // DB연결 파일을 불러온다, (사용 후 mysqli_close($conn); 권장  : db와 연결을 끊는다)

$noticeSql = "select nGuId, nTitle, nAdminNick, nDate from noticeTable order by nDate desc limit 3;";

$noticeResult = mysqli_query($conn, $noticeSql);

$noticeArr = mysqli_fetch_all($noticeResult);

$noticeLen = mysqli_num_rows($noticeResult);

?>