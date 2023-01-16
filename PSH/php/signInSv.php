<?php

function signIn($argUserInfo){
    session_start();

    $_SESSION["uGuId"] = $argUserInfo["uGuId"];
    $_SESSION["userNick"] = $argUserInfo["userNick"];


    echo "<script>
        alert('로그인 성공');
        location.href ='/main.php';
    </script>";

}

require_once("connDB.php");

$userId = $_POST["userId"];
$userPw = $_POST["userPw"];

$sql = "select uGuId, userNick from userTable where userId = '$userId' and userPw = '$userPw'";

$result = mysqli_query($conn, $sql);
$userInfo = mysqli_fetch_assoc($result);

// 연관배열(형태)
// array(3) { ["uGuId"]=> string(1) "2" ["userId"]=> string(4) "test" ["userNick"]=> string(4) "asdf" }

if($userInfo !== null){
    signIn($userInfo);
}
else{
    $sql = "select aGuId AS uGuId, adminNick AS userNick from adminTable where adminId = '$userId' and adminPw = '$userPw'";

    $result = mysqli_query($conn, $sql);
    $userInfo = mysqli_fetch_assoc($result);

    if($userInfo !== null){
        signIn($userInfo);
    } 
    else{
        echo "<script>
            alert('로그인 실패');
            location.href ='/signIn.php';
        </script>";
    }
}

?>