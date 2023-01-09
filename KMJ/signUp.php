<!DOCTYPE html>
<html>
<head>
     <!-- 회원가입 페이지 -->
    <title>signUpPage</title>
    <link rel="stylesheet" href="signUp.css">
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
            <a class="item" href="#">전체게시판</a>
            <a class="item" href="#">공지사항</a>
            <a class="item" href="#">자유</a>
            <a class="item" href="#">Study</a>
    </div>
    </div>
    <!--회원가입 전체 칸-->
    <div class="content_wrap">
        <div class="register_wrap">
            <div class="register_banner">
                <div class="register_text">회원가입</div>
            </div>
            <div class="register_form">
                <form>
                    <table>
                        <tbody class="form">
                        <tr>
                            <td height="25"></td>
                        </tr>
                        <tr>
                        <td class="login_blank"><label for="name">아이디</label></td>
                        <td colspan="3"><input class="input" name="Id" type="text" placeholder="아이디를 입력하세요."></td>
                        <td><button type="button" class="emailConfirm">ID 중복 확인</button><td> 
                        </tr>
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                        <td class="login_blank"><label for="password">이름</label></td>
                        <td><input class="small_input" name="name" type="text" placeholder="이름을 입력하세요."></td>
                        <td class="login_blank"><label for="password">닉네임</label></td>
                        <td><input class="small_input" name="nickname" type="text" placeholder="닉네임을 입력하세요."></td>
                        <td><button type="button" class="nicknameConfirm">닉네임 중복 확인</button><td> 
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>


</body>
</html>