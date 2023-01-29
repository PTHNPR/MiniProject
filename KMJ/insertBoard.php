<!-- 게시글 작성 페이지 -->
<!--form.php-->
<?php
include "session.php"; // 세션처리
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>insertBoardPage</title>
    <link rel="stylesheet" type="text/css" href="signUp.css">
    <script>
        function check_input() {
        
        if (!document.board.subject.value){  //제목체크
            alert("제목을 입력하세요!");
            document.board.subject.focus();
            return;
        }
        if (!document.board.content.value) {
            alert("내용을 입력하세요!")
            document.board.content.focus();
            return;
        }
        
        document.board.submit();
        }
    </script>
</head>
<body>
    <!-- 전체 배너 -->
    <div class="main_wrap">
    <!-- 헤드 배너 전체 구역 -->
    <div class="header_wrap">
    <!-- 사이트 이름 칸 -->
    <div class="site">
        <a href="main.php"  class="site_text" style="color: black; font-size: 50px;">사이트 이름</a>
    </div>
    <!-- 로그인 버튼 -->
    <div class="box">

<!--로그인 상태 판별 창-->
    <?php
    if(!$userid){
?>
        <a href="signIn.php">로그인</a>
<?php
    } else {
?> 
        <a href="logout.php">로그아웃</a>
<?php       
    }
?>
    </div>
    <!-- 카테고리 -->
    <div class="menu_wrap">
            <a class="item" href="main.php">전체게시판</a>
            <a class="item" href="noticeBoard.php">공지사항</a>
            <a class="item" href="freeBoard.php">자유</a>
            <a class="item" href="studyBoard.php">Study</a>
    </div>
    </div>
    <!--회원가입 전체 칸-->
    <div class="content_wrap">
        <div class="register_wrap">
            <div class="register_banner">
                <div class="register_text">글 작성</div>
            </div>
            <form name="board" method="post" action="insertWriting.php" enctype="multipart/form-data">
            <table class="board_form">
                <tbody>
                <tr>
                    <td>글쓴이 : </td>
                    <td><?=$username?><?=$adminname?></td> 
                </tr>
                <tr>
                    <td>게시판 종류</td>
                    <td><select name="category">
                        <option>자유</option>
                        <option>Study</option>
                    </select></td>
                </tr>
                <tr>
                    <td>글 제목 : </td>
                    <td><input name="subject" type="text"></td>
                </tr>
                <tr>
                    <td rowspan="2">글 내용</td>
                </tr>
                <tr>
                    <td rowspan="2"><textarea name="content"></textarea></td>
                </tr>
                <tr class="buttons">
                    <td rowspan="2"><button type="button" onclick="check_input()">저장하기</button></td>
                </tr>
                </tbody>
            </table>
            </form>
        </div>
    </div>
</body>
</html>