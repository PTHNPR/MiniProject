<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>회원가입</title>
        <link rel="stylesheet" href="css/signUp.css" >
    </head>
    <body>
        <?php require_once("php/header.php");  ?> <!-- 헤더 파일 -->
        <container class="signUp_container">
            <div class="signUp_title">
                <span>회원가입</span>
            </div>
            <form class="signUp_form" id="signUp_form" method="post" action="/php/signUpSv.php">
                <div class="signUp_input_div">
                    <div class="input_userId">
                        <label for="userId">
                            <span>아이디</span>
                        </label>
                        <input type="text" name="userId" id="userId">
                        <button class="checked_btn" type="button">ID 중복확인</button>
                    </div>
                    <div class="input_msg" ></div>
                </div>
                <div class="signUp_input_div">
                    <div class="input_userNick">
                        <label for="userNick">
                            <span>닉네임</span>
                        </label>
                        <input type="text" name="userNick" id="userNick">
                        <button class="checked_btn" type="button">닉네임 중복확인</button>
                    </div>
                    <div class="input_msg" ></div>
                </div>
                <div class="signUp_input_div" id="signUp_input_userName">
                    <div class="input_userName">
                        <label for="userName">
                            <span>이름</span>
                        </label>
                        <input type="text" name="userName" id="userName">      
                    </div>
                </div>
                <div class="signUp_input_div">
                    <div class="input_userPw">
                        <label for="userPw">
                            <span>비밀번호</span>
                        </label>
                        <input type="password" name="userPw" id="userPw">
                    </div>
                    <div class="input_msg" ></div>
                </div>
                <div class="signUp_input_div">
                    <div class="input_comfirmPw">
                        <label for="comfirmPw">
                            <span>비밀번호 확인</span>
                        </label>
                        <input type="password" name="comfirmPw" id="comfirmPw"><br>
                    </div>
                    <div class="input_msg" ></div>
                </div>
                <div class="signUp_input_div">
                    <div class="input_userEmail">
                        <label for="userEmail">
                            <span>이메일</span>
                        </label>
                        <input type="text" name="userEmail" id="userEmail">
                    </div>
                    <div class="input_msg" ></div>
                </div>
            </form>
            <button class="signUp_btn" id="signUp_btn" type="submit" form="signUp_form" >가입하기</button>
        </container>
    </body>
</html>