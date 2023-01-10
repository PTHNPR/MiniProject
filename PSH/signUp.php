<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/signUp.css" >
    </head>
    <body>
        <?php require_once("php/header.php");  ?> <!-- 헤더 파일 -->
        <form id="signUpForm" method="post" action="/php/signUpSv.php">
            아이디<input type="text" name="userId" id="userId"><br>
            이름<input type="text" name="userName" id="userName"><br>
            닉네임<input type="text" name="userNick" id="userNick"><br>
            비밀번호<input type="password" name="userPw" id="userPw"><br>
            비밀번호 확인<input type="password" name="comfirmPw" id="comfirmPw"><br>
            이메일<input type="text" name="userEmail" id="userEmail"><br>
            <input type="submit" value="확인">
        </form>
    </body>
</html>