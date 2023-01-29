
let flagList = [];
flagList.length = 3;
document.getElementById('comfirmPw').addEventListener('blur', userPwCmf);




// 아이디 중복 확인
function userIdChecked(){
	let userId_msg = document.getElementById('userId_msg');
	let userId = document.getElementById('userId');

    if(userId.value === ''){
        userId_msg.innerText = '입력하세요.';
		userId_msg.style.color = 'red';
        flagList[0] = false;
        return;
    }

	const request = new XMLHttpRequest();
    request.open("GET", 'php/signUpFolder/idChecked.php' + '?userId=' + userId.value, true); // false 사용 안됨
    request.setRequestHeader('Content-type', 'text; charset=UTF-8');
    
	request.onreadystatechange = function(){
		if(request.readyState == 4 || request.status == 200){
			let response = request.response;
			console.log("아이디 resp : " + response);
			if(response === "사용중"){
				userId_msg.innerText = '이미 사용중입니다.';
				userId_msg.style.color = 'red';
                flagList[0] = false;
			}
			else{
				userId_msg.innerText = '사용가능합니다.';
				userId_msg.style.color = '#00ff40';
                flagList[0] = true;
			}
			
		}// end of if
		else{   // request.status !== 200 || request.readyState !== 4)
			alert('통신 실패');
		}  
	}   // end of function (onReadyStateChange)
	request.send();   // GET
}

// 닉네임 중복 확인
function userNickChecked(){
	let userNick_msg = document.getElementById('userNick_msg');
	let userNick = document.getElementById('userNick');

    if(userNick.value === ''){
        userNick_msg.innerText = '입력하세요.';
        userNick_msg.style.color = 'red';
        flagList[1] = false;
        return;
    }

	const request = new XMLHttpRequest();
    request.open("GET", 'php/signUpFolder/nickChecked.php' + '?userNick=' + userNick.value, true); // false 사용 안됨
    request.setRequestHeader('Content-type', 'text; charset=UTF-8');
    
	request.onreadystatechange = function(){
		if(request.readyState == 4 || request.status == 200){
			let response = request.response;
			console.log("닉네임 resp : " + response);
			if(response === "사용중"){
				userNick_msg.innerText = '이미 사용중입니다.';
				userNick_msg.style.color = 'red';
                flagList[1] = false;
			}
			else{
				userNick_msg.innerText = '사용가능합니다.';
				userNick_msg.style.color = '#00ff40';
                flagList[1] = true;
			}
			
		}// end of if
		else{   // request.status !== 200 || request.readyState !== 4)
			alert('통신 실패');
		}  
	}   // end of function (onReadyStateChange)
	request.send();   // GET
}

// 비밀번호 확인
function userPwCmf(){
    let userPw = document.getElementById('userPw').value;
    let comfirmPw = document.getElementById('comfirmPw').value;
    let confirmPw_msg = document.getElementById('confirmPw_msg');

    console.log(userPw);
    console.log(comfirmPw);

    if(comfirmPw !== userPw){
        confirmPw_msg.innerText = '일치하지 않습니다';
		confirmPw_msg.style.color = 'red';
        flagList[2] = false;
    }
    else if(comfirmPw === ''){
        confirmPw_msg.innerText = '입력해주세요';
		confirmPw_msg.style.color = 'red';
        flagList[2] = false;
    }
    else{
        confirmPw_msg.innerText = '일치합니다';
		confirmPw_msg.style.color = '#00ff40';
        flagList[2] = true;
    }
}

function signUpSubmit(){
    let signUp_form = document.querySelectorAll(".form_inputs");
    console.log(signUp_form);
    console.log(flagList);

    let blankCheck = 0;
    let flagCheck = 0;

    for(i = 0; i < signUp_form.length; i++){
        if(signUp_form[i].value !== '')
            blankCheck += 1;
    }

    for(i = 0; i < flagList.length; i++){
        if(flagList[i] === true)
            flagCheck += 1;
    }

    console.log(blankCheck);
    console.log(flagCheck);

    if((blankCheck !== signUp_form.length) || (flagCheck !== flagList.length)){
        alert('항목을 확인하세요');
        return false;
    }
    else{
        let signUp = document.getElementById('signUp_form');
        signUp.submit();
    }


}