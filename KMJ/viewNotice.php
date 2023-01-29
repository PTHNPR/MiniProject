<?php
$num = $_GET["num"];
$page = $_GET["page"];

$con = mysqli_connect("localhost", "KMJ", "123456", "miniproject");
$sql = "select * from noticetable where nGuId=$num";
$result = mysqli_query($con, $sql); // SQL 명령 실행

$row = mysqli_fetch_assoc($result); // 레코드 가져오기

$id = $row["nAdminId"];        // 아이디
$name = $row["nAdminNick"];    // 이름
$subject = $row["nTitle"];         // 제목
$regist_day = $row["nDate"];      // 작성일

$content = $row["nContext"];        // 내용
$content = str_replace("", "&nbsp;", $content); // 공백 변환
$content = str_replace("\n", "<br>", $content); // 줄바꿈 변환
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>게시글 보기</title>
<link rel="stylesheet" href="">
</head>
<body>
    <h2>게시판 > 내용보기</h2>
    <table>
        <tbody>
            <tr>
                <td><b>제목:</b><?=$subject?></td>
                <td><?=$name?> | <?=$regist_day?></td>
            </tr>
            <tr><td>
                <?php
                    echo $content;  // 글 내용 출력
                ?></td>
            </tr>
        </tbody>
        <tbody>
            <tr><td><button onclick="location.href='noticeBoard.php?page=<?=$page?>'">목록보기</button></td></tr>
            <tr><td><button onclick="location.href='insertWriting.php'">글쓰기</button></td></tr>
        </tbody>
    </table>
</body>
</html>