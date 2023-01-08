<!DOCTYPE html>
<html>
<head>
    <title>MainPage</title>
        <link rel="stylesheet" href="main.css">
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
            <a class="item" href="#">게시판</a>
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
                    <tr class="th_hr">
                        <th scope="col" class="no">게시판</th>
                        <th scope="col" class="title">제목</th>
                        <th scope="col" class="no">글쓴이</th>
                        <th scope="col" class="no">날짜</th>
                    </tr>
                </thead> 
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
                    <tr class="notice_final">
                        <td class="notice_box">공지</td>
                        <td class="title">공지 3입니다.</td>
                        <td class="author">관리자4</td>
                        <td class="time">2022.12.27</td>
                    </tr>
                </tbody>
            </table>
            <!--전체게시글-->
            <table width="100%" class="main_table">
                <!--게시글 양식-->
                <thead>
                    <tr class="th_hr">
                        <th scope="col" class="no">게시판</th>
                        <th scope="col" class="title">제목</th>
                        <th scope="col" class="no">글쓴이</th>
                        <th scope="col" class="no">날짜</th>
                    </tr>
                </thead> 
                <!--공지사항 게시글-->
                <tbody>
                    <tr class="notice">
                        <td class="notice_box">Study</td>
                        <td class="title">테스트 입니다.</td>
                        <td class="author"></td>
                        <td class="time">2022.12.01</td>
                    </tr>
                    <tr class="notice">
                        <td class="notice_box">Study</td>
                        <td class="title">테스트 입니다.</td>
                        <td class="author"></td>
                        <td class="time">2022.12.01</td>
                    </tr>
                    <tr class="notice">
                        <td class="notice_box">자유</td>
                        <td class="title">테스트 입니다.</td>
                        <td class="author"></td>
                        <td class="time">2022.12.01</td>
                    </tr>
                    <tr class="notice">
                        <td class="notice_box">자유</td>
                        <td class="title">테스트 입니다.</td>
                        <td class="author"></td>
                        <td class="time">2022.12.01</td>
                    </tr>
                    <tr class="notice">
                        <td class="notice_box">Study</td>
                        <td class="title">테스트 입니다.</td>
                        <td class="author"></td>
                        <td class="time">2022.12.01</td>
                    </tr>
                    <tr class="notice">
                        <td class="notice_box">Study</td>
                        <td class="title">테스트 입니다.</td>
                        <td class="author"></td>
                        <td class="time">2022.12.01</td>
                    </tr>
                    <tr class="notice">
                        <td class="notice_box">Study</td>
                        <td class="title">테스트 입니다.</td>
                        <td class="author"></td>
                        <td class="time">2022.12.01</td>
                    </tr>
                    <tr class="notice">
                        <td class="notice_box">Study</td>
                        <td class="title">테스트 입니다.</td>
                        <td class="author"></td>
                        <td class="time">2022.12.01</td>
                    </tr>
                    <tr class="notice">
                        <td class="notice_box">Study</td>
                        <td class="title">테스트 입니다.</td>
                        <td class="author"></td>
                        <td class="time">2022.12.01</td>
                    </tr>
                    <tr class="notice_final">
                        <td class="notice_box">자유</td>
                        <td class="title">테스트 입니다.</td>
                        <td class="author"></td>
                        <td class="time">2022.12.01</td>
                    </tr>
                </tbody>
            </table>
            
            <div></div>
        </div>
    </div>
    </div>
    <?php
    ?>
</body>
</html>
