<!DOCTYPE html>
<html>
<head>
    <title>SignInPage</title>
    <link rel="stylesheet" href="signIn.css"> 
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
    <!-- 900 경계구역 양측 200px ##게시판 + 공지사항+ 글-->
    <!--전체 감싸기-->
    <div class="content_wrap">  
        <div class="login_wrap">   
            <div class="login_banner">
                <div class="login_text">로그인</div>
            </div>
            <div class="login_form">
                <form>
                    <table>
                        <tbody class="form">
                        <tr>
                            <td height="25"></td>
                        </tr>
                        <tr>
                        <td class="login_blank"><label for="name">아이디</label></td>
                        <td colspan="3"><input class="input" name="name" type="text" placeholder="아이디를 입력하세요."></td>
                        <td class="login_button" rowspan="3" ><a class="button">로그인</a><td> 
                        </tr>
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                        <td class="login_blank"><label for="password">비밀번호</label></td>
                        <td colspan="3"><input class="input" name="password" type="password" placeholder="비밀번호를 입력하세요."></td>
                        </tr>
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="regi_box"><a class="register">회원가입</a></td>
                            <td width="5"></td>
                            <td class="IdCh_box"><a class="IdCh">아이디 찾기</a></td>
                            
                        </tr>
                        </tbody>
                    </table>    
                </form>
            </div>

        </div>  
    </div>
</body>
</html>


