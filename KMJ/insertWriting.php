<!-- db에 자유/study 게시판 글 저장 insert.php-->
<?php
include "session.php";
if(!$userid and !$adminid){
    echo "
    <script>
        alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
        history.go(-1)
    </script>
    ";
    exit;
}
$subject = $_POST["subject"]; // 제목
$content = $_POST["content"]; // 내용
$category = $_POST["category"]; // 글 종류

$subject = htmlspecialchars($subject, ENT_QUOTES);
$content = htmlspecialchars($content, ENT_QUOTES);
$category = htmlspecialchars($category, ENT_QUOTES);
$regist_day = date("Y-m-d (H:i)");

// 첨부파일 업로드 미구현
$con = mysqli_connect("localhost", "KMJ", "123456", "miniproject");
$sql = "insert into boardtable (bUserId, bUserNick, bTitle, bContext, bDate,bCategory)values";
if ($userid){
$sql .= "('$userid','$username','$subject','$content','$regist_day','$category')";
}
else {
$sql .= "('$userid','$username','$subject','$content','$regist_day','$category')";
}
mysqli_query($con, $sql); // $sql에 저장된 명령 실행

mysqli_close($con); //db연결 끊기

//a목록 페이지 이동
echo "<script>
location.href = 'freeBoard.php';
</script>";



?>
