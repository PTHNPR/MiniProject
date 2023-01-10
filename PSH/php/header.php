<?php 

session_start();

?>

<!-- <link rel="stylesheet" href="css/header.css"> -->
<!-- 폰트 사용 -->
<script src="https://kit.fontawesome.com/b71869ee5c.js" crossorigin="anonymous"></script>
<script src="js/header.js"></script>
<header class="main_header">
    <div class="main_header_1">
        <div class="header_site_name" onclick="location.href='main.php'">
            사이트 이름
        </div>

        <div class="header_div">
            <div class="sign_div">

                <?php if(isset($_SESSION["uGuId"])){ ?>
                    <div class="userInfo_icon" onclick="clickedMenu()">
                        <i class="fa-solid fa-circle-user fa-2x"></i>
                        <i class="fa-solid fa-caret-down fa-lx"></i>
                    </div>
                    <div class="userInfo_div" id="userInfo_div" >
                        <div class="menu_tri"></div>
                        <div class="userInfo_menu">
                            <span class="signOut_btn">Sign Out</span>
                        </div>
                    </div>
                <?php } else { ?>
                    <span class="sign_span" onclick="location.href='signIn.php'">Sign In</span>
                <?php };?>
            </div>
            <div class="category_div">
                <ul class="category_ul">
                    <li><a class="header_a" href="allBoard.php">전체</a></li>
                    <li><a class="header_a" href="freeBoard.php">자유</a></li>
                    <li><a class="header_a" href="studyBoard.php">STUDY</a></li>
                    <li><a class="header_a" href="noticeBoard.php">공지사항</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
</header>