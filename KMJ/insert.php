
<!-- db에 회원정보 저장-->
<?php
$Id = $_POST["id"]; // 아이디
$Name = $_POST["name"]; // 이름
$Nick = $_POST["nick"]; // 닉네임
$Pw = $_POST["pw"]; // 비밀번호
$Email = $_POST["email"]; // 이메일

//가입일자 생략
//회원 고유번호 미구현

$con = mysqli_connect("localhost", "KMJ", "123456", "miniproject");


$sql = "insert into usertable (userId, userName, userNick, userPw, userEmail)";
//데이터 삽입 명령

$sql .= "values('$Id','$Name','$Nick','$Pw','$Email')";


mysqli_query($con, $sql); // SQL 실행 명령
mysqli_close($con);

// 로그인 폼으로 이동
echo "<script>
        location.href = 'signIn.php';
    </script>";
?>





