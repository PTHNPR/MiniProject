<!DOCTYPE html>
<html>
<head>
    <title>TestPage</title>
    <style>


        /* 중앙정렬전 전체 값 초기화 */ 
       *{
            margin: 0; padding: 0;
        }

        /* 중앙정렬화 */
        body{
            margin: 0 auto;
            max-width: 1300px;
            width: 100%;
            /* width: 1300px; */
        }
        .main_wrap{
            height: 900px;
        }
        div{
            display: block;
        }
        a:link { color:white; text-decoration:none; }
        a:visited { color:white; text-decoration:none; }
        a:hover { color:white; text-decoration:none; }
        /* 헤드 배너 전체 구역 */
        div.header_wrap{

            clear: both;
            position:absolute; /* 절대적 위치고정 */
            height: 200px;
            width: 1300px;
            border-bottom: 1px solid black;
            
        }
        
        /* 사이트 이름 칸 */
        div.site{
            position:absolute; /* 절대적 위치고정 */
            height: 100px;
            width: 300px;
            left: 0px;
            line-height : 100px; /* 글자 높이 맞추기*/
            text-align: center; /* 텍스트 가로 배치 */
            margin: 0px 50px;
            padding:50px;
            
            
            font-size: 24px; /*글자크기*/

        }
        /* 카테고리 포장 구역*/
        div.menu_wrap{
            position:absolute; /* 절대적 위치고정 */
            right: 0px;
            height: 100px;
            top: 100px;
            width: 800px;
            
        }
        /*로그인 둥글게 둥글게 */

        div.box{
            position: absolute; /* 유동적 위치고정 */
            top: 15px;
            right: 110px;
            line-height:45px; /* 글자 높이 맞추기*/
            height: 50px;
            width: 140px;
            text-align: center; /* 텍스트 가로 배치 */
            border: 10px solid white; /* 바깥 경계 */
            background-color: #E0E0E0; /* 구역 확인용*/
            font-size: 24px; /*글자크기*/
            border-radius: 20px; /*상자 둥글게*/
            z-index: 4;
        }

        .item:nth-child(1){
            left: 80px;
            border: 1px solid black;

        }
        .item:nth-child(2){
            left: 230px;
            border: 1px solid black;
        }
        .item:nth-child(3){
           left: 380px;
            border: 1px solid black;
        }
        .item:nth-child(4){
            left: 530px;
            border: 1px solid black;
        }
        .item{

            position: absolute;/* 유동적 위치고정 */
            float: right; /*첫번째 항목 가장 오른쪽부터*/
            text-align: center;/* 텍스트 가로 배치 */
            font-size: 24px; /*글자크기*/
            height: 45px;
            width: 149px;
            
            margin: 0 3px;
            padding: 10px 0;
            border: 0px solid black;
            background-color: #9E9E9E;
            line-height:45px;
        }
        .content_wrap{
            width: 900px;
            height: 700px;
            
            position: absolute;
            top: 201px;
            clear: both;
            left: 310px;
        }
        .content_banner{
            position: absolute;
            width: 900px;
            height: 50px;
            line-height: 60px;
            left: 0px;
            
        }
        .banner_text{
            position: absolute;
            left: 0px;
            height: 50px;
            line-height: 50px;
            padding: 0px 40px;
            
            font-size: 20px; /*글자크기*/
        }
        .not_pos_wrap{
            position: absolute;
            width: 900px;
            height: 650px;
            top: 50px;
            border: 1px 0px solid black;
            /* background-color: aquamarine */
        }

        thead{
            border-top: 1px solid black;
        }
        /*제일 위에 th */
        th{
            white-space: nowrap; /* 불필요한 공백제거 */
            padding: 9px 50px;
            
            /* border-top: 1px solid #ccc;
            border-bottom: 1px solid #BBB; */
        }
        td{
            white-space: nowrap;
            padding: 9px 50px;
        }
        .no{
            text-align: center;
        }
        th.title{
            width: 100%;
        }

        
        
    </style>
</head>
<body>
    <!-- 전체 배너 -->
    <div class="main_wrap">
    <!-- 헤드 배너 전체 구역 -->
    <div class="header_wrap">
    <!-- 사이트 이름 칸 -->
    <div class="site">
        <h1>사이트 이름</h1>
    </div>
    <!-- 로그인 버튼 -->
    <div class="box">
        <a>Login</a>
    </div>
    <!-- 카테고리 -->
    <div class="menu_wrap">
            <a class="item" href="#">전체</a>
            <a class="item" href="#">공지사항</a>
            <a class="item" href="#">자유</a>
            <a class="item" href="#">Study</a>
    </div>
    </div>
    <!-- 900 경계구역 양측 200px ##게시판 + 공지사항+ 글-->
    <!--전체 감싸기-->
    <div class="content_wrap">  
        <!--게시판 이름-->
        <div class="content_banner">
            <p class="banner_text">최신 글</p>
        </div>
        <!--공지사항 + 게시글 구역-->
        <div class="not_pos_wrap">
        <!--공지사항-->
            <table width="100%" class="notice_table">
                <!--게시글 양식-->
                <thead>
                    <tr>
                        <th scope="col" class="no">번호</th>
                        <th scope="col" class="title">제목</th>
                        <th scope="col" class="no">글쓴이</th>
                        <th scope="col" class="no">날짜</th>
                    </tr>
                </thead> 
                <!--공지사항 게시글-->
                <tbody>
                    <tr class="notice">
                        <td class="notice_box">공지</td>
                        <td class="title">공지 1입니다.</td>
                        <td class="author">관리자1</td>
                        <td class="time">2022.12.31</td>
                    </tr>
                    <tr class="notice">
                        <td class="notice_box">공지</td>
                        <td class="title">공지 2입니다.</td>
                        <td class="author">관리자2</td>
                        <td class="time">2022.12.29</td>
                    </tr>
                    <tr class="notice">
                        <td class="notice_box">공지</td>
                        <td class="title">공지 3입니다.</td>
                        <td class="author">관리자4</td>
                        <td class="time">2022.12.27</td>
                    </tr>
                </tbody>
            </table>
        
            <!--전체게시글-->
            <div></div>
        </div>
    </div>
    </div>
    
   
<?php

?>
</body>
</html>
