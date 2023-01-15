<!DOCTYPE html>
<html>
<head>
    <!-- 회원가입 페이지 -->
    <meta charset="utf-8">
    <title>signUpPage</title>
    <link rel="stylesheet" href="signUp.css">
    <script>
        function check_input() {
            if (!document.member.userId.value){
                alert("아이디를 입력하세요!");
                document.member.userId.focus();
                return;
            }
            if (!document.member.name.value){
                alert("이름을 입력하세요!");
                document.member.name.focus();
                return;
            }
            if (!document.member.nickname.value){
                alert("닉네임을 입력하세요!");
                document.member.nickname.focus();
                return;
            }
            if (!document.member.pass.value){
                alert("비밀번호를 입력하세요!");
                document.member.pass.focus();
                return;
            }
            if (!document.member.pass_confirm.value){
                alert("비밀번호 확인을 입력하세요!");
                document.member.pass_confirm.focus();
                return;
            }
            if (!document.member.email.value){
                alert("이메일을 입력하세요!");
                document.member.email.focus();
                return;
            }
            //비밀번호 입력과 비밀번호 확인입력이 다를 경우
            if(document.member.pass.value!=
                document.member.pass_confirm.value){
                    alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                document.member.pass.focus();
                document.member.pass.select();
                retrun;
                }
            document.member.submit();
        }
        // 취소하기 (미구현) -> 입력값 초기화

        // 아이디 중복 확인 
        // 가보자고

        function check_id(){
        window.open("check_id.php?userId="+document.member.userId.value,
                    "IDcheck",
                    "left=700,top=300,width=380,height=160,scrollbars=no,resizable=yes");
        }
        function check_nickname(){
        window.open("check_nickname.php?userNick="+document.member.userNick.value,
                    "Nickcheck",
                    "left=700,top=300,width=380,height=160,scrollbars=no,resizable=yes");
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
            <a class="item" href="#">전체게시판</a>
            <a class="item" href="#">공지사항</a>
            <a class="item" href="freeBoard.php">자유</a>
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
                <form name="member" action="insert.php" method="post">
                    <table>
                        <tbody class="form">
                        <tr>
                            <td height="25"></td>
                        </tr>
                        <tr>
                        <td class="login_blank"><label for="name">아이디</label></td>
                        <td colspan="3"><input class="input" name="userId" type="text" placeholder="아이디를 입력하세요."></td>
                        <td><button type="button" class="emailConfirm" onclick="check_id()">ID 중복 확인</button><td> 
                        </tr>
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <tr>
                        <td class="login_blank"><label for="password">이름</label></td>
                        <td><input class="small_input" name="name" type="text" placeholder="이름을 입력하세요."></td>
                        <td class="login_blank"><label for="password">닉네임</label></td>
                        <td><input class="small_input" name="userNick" type="text" placeholder="닉네임을 입력하세요."></td>
                        <td><button type="button" class="nicknameConfirm" onclick="check_nickname()">닉네임 중복 확인</button><td> 
                        </tr>
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <!--비밀번호-->
                        <tr>
                        <td class="login_blank"><label for="name">비밀번호</label></td>
                        <td colspan="3"><input class="input" name="pass" type="password" placeholder="비밀번호를 입력하세요."></td>
                        </tr>
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <!--비밀번호 확인-->
                        <tr>
                        <td class="login_blank"><label for="name">비밀번호 확인</label></td>
                        <td colspan="3"><input class="input" name="pass_confirm" type="password" placeholder="비밀번호를 입력하세요."></td>
                        </tr>
                        <tr>
                            <td height="15"></td>
                        </tr>
                        <!--이메일-->
                        <tr>
                        <td class="login_blank"><label for="name">이메일</label></td>
                        <td colspan="3"><input class="input" name="email" type="text" placeholder="이메일을 입력하세요."></td>
                        </tr>
                        <tr>
                            <td height="20"></td>
                        </tr>
                        <!--계정만들기 버튼-->
                        <tr>
                            <td></td>
                            <!--style="cursor:pointer onclick="validationData()"-->
                            <td colspan="3" class="regi_maker_button"><button type="button" onclick="check_input()" class="regi_maker">계정만들기</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>


</body>
</html>