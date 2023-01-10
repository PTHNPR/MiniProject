<?php

require_once("connDB.php");

$userId = $_POST["userId"];
$userPw = $_POST["userPw"];

$sql = "select uGuId, userNick from userTable where userId = '$userId' and userPw = '$userPw'";

$result = mysqli_query($conn, $sql);

$userInfo = mysqli_fetch_assoc($result);
// 연관배열(형태)
// array(3) { ["uGuId"]=> string(1) "2" ["userId"]=> string(4) "test" ["userNick"]=> string(4) "asdf" }

if($userInfo !== null){
    
    echo var_dump($userInfo);

    session_start();

    $_SESSION["uGuId"] = $userInfo["uGuId"];
    $_SESSION["userNick"] = $userInfo["userNick"];


    echo "<script>
        alert('로그인 성공');
        location.href ='/main.php';
    </script>";

}
else{
    echo "<script>
        alert('로그인 실패');
        location.href ='/signIn.php';
    </script>";
}

?>