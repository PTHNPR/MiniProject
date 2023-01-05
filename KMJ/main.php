<!DOCTYPE html>
<html>
<head>
    <title>MainPage</title>
    <style>
        #id {
            background-color: black;
        }


        /*카테고리 메뉴 스타일*/
        div.item{
            text-align: center;
            font-size: 24px; /*글자크기*/
            height: 45px;
            line-height: 40px;
            width: 120px;
            float: right; /*첫번째 항목 가장 오른쪽부터*/
            margin: 0 3px;
            padding: 10px 0;
            border: 0px solid black;
            background-color: #9E9E9E;
        }
    </style>
</head>
<body>
    <!-- 전체 -->
    <div id="wrap">
        <!--사이트 이름 + 로그인 + 전체 카테고리-->
        <header class="head">
            <span>
            <!--사이트 이름-->
            <h1>사이트 이름</h1>
            <!-- 로그인 랩핑 -->
            </span>
            <span>
            <div>
                <div>Login</div> 
            </div>
            </span>
            <!-- 전체 카테고리 -->
            <span>
            <div class="category_container">
                <div class="item">Study</div>
                <div class="item">자유</div>
                <div class="item">공지사항</div>
                <div class="item">전체</div> 
            </div>
            </span>
        </header>
        <div>

        </div>
    </div>
<?php

?>
</body>
</html>
