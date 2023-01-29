<!DOCTYPE html>
<html>
<head>
    <!-- 회원가입 페이지 -->
    <meta charset="utf-8">
    <title>signUpPage</title>
    <link rel="stylesheet" type="text/css" href="signUp.css">
    <script>
        function check_input() {
            if (!document.member.email.value){
                alert("이메일을 입력하세요!");
                document.member.email.focus();
                return;
            }
            
            document.member.submit();
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
        <a href="signIn.php">Login</a>
    </div>
    <!-- 카테고리 -->
    <div class="menu_wrap">
            <a class="item" href="main.php">전체게시판</a>
            <a class="item" href="noticeBoard.php">공지사항</a>
            <a class="item" href="freeBoard.php">자유</a>
            <a class="item" href="studyBoard.php">Study</a>
    </div>
    </div>
    <!--아이디 찾기 전체 칸-->
    <div class="content_wrap">
        <div class="register_wrap">
            <div class="register_banner">
                <div class="register_text">아이디 찾기</div>
            </div>
            <div class="register_form">
                <form name="member" action="findIdLogic.php" method="post">
                    <table>
                        <tbody class="form">
                        <tr>
                            <td height="25"></td>
                        </tr>
                        <!--이메일-->
                        <tr>
                        <td class="login_blank"><label for="name">이메일</label></td>
                        <td colspan="3"><input class="input" name="email" type="text" placeholder="이메일을 입력하세요."></td>
                        </tr>
                        <tr>
                            <td height="20"></td>
                        </tr>
                        <!--아이디 찾기 확인 버튼-->
            
                        <tr>
                            <td></td>
                            <td colspan="3" class="regi_maker_button"><a href="findIdLogic.php">확인</a></td>
                            <td width="5"></td>
                            <td class="IdCh_box"><a class="IdCh" href="signIn.php">취소</a></td>   
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>


</body>
</html>