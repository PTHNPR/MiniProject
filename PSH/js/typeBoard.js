




function checkByte(argObj){
    var now_byte = document.getElementById("now_byte");
    console.log(now_byte);
    const maxByte = 500; // 최대 500바이트
    const text_byte = argObj.value; // 입력한 문자
    const text_len = text_byte.length; // 입력한 문자 수

    let totalByte = 0;
    for(let i = 0; i < text_len; i++){
        const each_char = text_byte.charCodeAt(i);  // 문자를 코드로 변환
        const uni_char = each_char.toString(16); // 유니코드 변환
        if(uni_char.length > 4){
            totalByte += 2; // 한글 : 2byte
        }
        else{
            totalByte += 1; // 영어, 숫자, 특수문자 : 1byte
        }
    }

    if(totalByte > maxByte){
        now_byte.innerText = totalByte;
        now_byte.style.color = "red";
    }
    else{
        now_byte.innerText = totalByte;
        now_byte.style.color = "green";
    }

}