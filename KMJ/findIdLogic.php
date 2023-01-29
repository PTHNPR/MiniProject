<!-- 아이디 찾기 처리 php -->
<?php
$email = $_POST["email"];

$con = mysqli_connect("localhost", "KMJ", "123456", "miniproject");
$sql = "select * from usertable where userEmail='$email'";

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
   

    mysqli_close($con);
   
        /* 유저 */
    if ($num_match) {
            session_start();
            $_SESSION["email"] = $row["email"];
        }

        echo "<script>
            location.href = 'answerId.php';
            </script>";
    
}

?>