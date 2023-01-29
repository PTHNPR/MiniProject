<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>로그인</title>
        <link rel="stylesheet" href="css/signIn.css" >
    </head>
    <body>
        <?php require_once("php/header.php");  ?>
        <container class="signIn_container">
            <div class="signIn_title">
                <span>로그인</span>
            </div>
            <div class="singIn_form_div"> 
                <form class="signIn_form" id="signIn_form" method="post" action="php/signInSv.php">
                    <div class="signIn_input_div">
                        <div class="signIn_input_box"><label for="userId"><span>아이디</span></label><input type="text" name="userId" id="userId"></div>
                        <div class="checked_msg" id="checked_userId_msg"></div>
                        <div class="signIn_input_box"><label for="userPw"><span>비밀번호</span></label><input type="password" name="userPw" id="userPw"></div>
                    </div>
                </form>
                <button class="signIn_button" type="submit" form="signIn_form">로그인</button>
            </div>
            <div class="move_button">
                <div class="move_signUp" onclick="location.href='signUp.php'"><span>회원가입</span></div>
                <div class="move_findId" onclick="location.href='findId.php'" style="display: none;"><span>아이디 찾기</span></div>
            </div>
        </container>
    </body>
    <script src="js/signIn.js"></script>
</html>