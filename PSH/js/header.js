function clickedMenu(){
    var menuIcon = document.getElementById("userInfo_div");
    
    if(menuIcon.style.display === "flex")
        menuIcon.style.display = "none";
    else
    menuIcon.style.display = "flex";
    
}

