<?php

require_once("connDB.php"); // DB연결 파일을 불러온다, (사용 후 mysqli_close($conn); 권장  : db와 연결을 끊는다)

$userId = $_POST["userId"];
$userName = $_POST["userName"];
$userNick = $_POST["userNick"];
$userPw = $_POST["userPw"];
$userEmail = $_POST["userEmail"];

$sql = "insert into userTable (userId, userPw, userName, userNick, userEmail)";
$sql .= " values('$userId', '$userPw', '$userName', '$userNick', '$userEmail');";

$result = mysqli_query($conn, $sql);    // 퀴리문 db에 전달, 반횐값은 boolean

if($result){
    echo "<script>alert('완료')</script>";
}
else{
    echo "<script>alert('실패 : ".mysqli_error($conn).");</script>";
}

mysqli_close($conn);

?>