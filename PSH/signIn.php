<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/signIn.css" >
    </head>
    <body>
        <?php require_once("php/header.php");  ?>
        <container class="signIn_container">
            <div class="container_div">
                <span>로그인</span>
                <hr>
                <div class="singIn_form_div"> 
                    <form class="signIn_form" method="post" action="">
                        <div class="signIn_input_container">
                            <div class="signIn_input_div"><span>아이디</span><input name="userId" id="userId"></div>
                            <div class="signIn_input_div"><span>비밀번호</span><input name="userPw" id="userPw"></div>
                        </div>
                    </form>
                    <button class="signIn_button">로그인</button>
                </div>
                <div class="move_button">
                    <div class="move_signUp" onclick="location.href='signUp.php'">회원가입</div>
                    <div class="move_findId" onclick="location.href='findId.php'">아이디 찾기</div>
                </div>
            </div>
        </container>
    </body>
</html>