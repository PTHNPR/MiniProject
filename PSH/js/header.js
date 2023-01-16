
// 로그인 후 사용자 메뉴 클릭 이벤트
function clickedMenu(){

    var menuIcon = document.getElementById("userInfo_div");
    
    if(menuIcon.style.display === "flex")
        menuIcon.style.display = "none";
    else
    menuIcon.style.display = "flex";
    
}

