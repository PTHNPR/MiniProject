<!-- 로그인 처리 php -->
<?php
$id = $_POST["id"];
$pw = $_POST["pw"];

$con = mysqli_connect("localhost", "KMJ", "123456", "miniproject");
$sql = "select * from usertable where userId='$id'";
$result = mysqli_query($con, $sql);

$num_match = mysqli_num_rows($result);

if(!$num_match) {
    echo "<script>
        window.alert('등록되지 않은 아이디입니다!)
        history.go(-1)
    </script>";
}
else{
    $row = mysqli_fetch_assoc($result);
    $db_pass = $row["userPw"];
    
    mysqli_close($con);
    if($pw != $db_pass){
        echo "<script>
            window.alert('비밀번호가 틀립니다!)
            history.go(-1)
            </script>";
        exit;
    }
    else {
        session_start();
        $_SESSION["userid"] = $row["userId"];
        $_SESSION["username"] = $row["userName"];

        echo "<script>
            location.href = 'main.php';
            </script>";
    }
}

?>