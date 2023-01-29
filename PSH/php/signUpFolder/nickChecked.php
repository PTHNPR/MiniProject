<?php 
require_once("/MiniProject/PSH/php/connDB.php"); // DB연결 파일을 불러온다, (사용 후 mysqli_close($conn); 권장  : db와 연결을 끊는다)

$userNick = $_GET["userNick"];

$sql = "select * from userTable where userNick = '$userNick';";

$result = mysqli_query($conn, $sql);    // 퀴리문 db에 전달, 반횐값은 boolean
$userInfo = mysqli_fetch_assoc($result);

// 연관배열(형태)
// array(3) { ["uGuId"]=> string(1) "2" ["userId"]=> string(4) "test" ["userNick"]=> string(4) "asdf" }


if($userInfo !== null){
    echo "사용중";
}
else{
    echo "사용가능";
}

mysqli_close($conn);


?>
