<!-- Study게시판 -->
<?php
include "session.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>studyBoardPage</title>
    <link rel="stylesheet" href="freeboard.css">
</head>
<body>
    <!-- 전체 배너 -->
    <div class="main_wrap">
    <!-- 헤드 배너 전체 구역 -->
    <div class="header_wrap">
    <!-- 사이트 이름 칸 -->
    <div class="site">
        <a href="main.php"  class="site_text" style="color: black; font-size: 50px;">사이트 이름</a>
    </div>
    <!-- 로그인 버튼 -->
    <div class="box">
               
<!--로그인 상태 판별 창-->
<?php
    if(!$userid){
?>
        <a href="signIn.php">로그인</a>
<?php
    } else {
?> 
        <a href="logout.php">로그아웃</a>
<?php       
    }
?>
    </div>
    <!-- 카테고리 -->
    <div class="menu_wrap">
            <a class="item" href="main.php">전체게시판</a>
            <a class="item" href="noticeBoard.php">공지사항</a>
            <a class="item" href="freeBoard.php">자유</a>
            <a class="item" href="studyBoard.php">Study</a>
    </div>
    </div>
    <!-- 900 경계구역 양측 200px ##게시판 + 공지사항+ 글-->
    <!--전체 감싸기-->
    <div class="content_wrap">  
        <!--게시판 이름-->
        <div class="content_banner">
            <p class="banner_text">Study 게시판</p>
        </div>
        <!--공지사항 + 게시글 구역-->
        <div class="not_pos_wrap">
            <!--전체게시글-->
            <table width="100%" class="main_table">
                <!--게시글 양식-->
                <thead>
                    <tr class="th_hr">
                        <th scope="col" class="no">순번</th>
                        <th scope="col" class="title">제목</th>
                        <th scope="col" class="no">글쓴이</th>
                        <th scope="col" class="no">날짜</th>
                    </tr>
                </thead>
                <tbody> 
                <?php
               
                
                /* 회원 게시판 글 목록 보기 */
                
                if (isset($_GET["page"]))
                    $page = $_GET["page"];
                else
                    $page = 1;

                $con = mysqli_connect("localhost", "KMJ", "123456", "miniproject");
                // $sql = "select * from boardtable order by bGuId desc";
                $sql = "select * from boardtable where bCategory = 'study'";
                $result = mysqli_query($con, $sql);

                $total_record = mysqli_num_rows($result); // 전체 글 수
                
                $scale = 5; // 한 화면에 표시되는 글 수 

                // 전체 페이지 수 ($total_page)계산
                if ($total_record % $scale == 0)
                    $total_page = floor($total_record/$scale);
                else
                    $total_page = floor($total_record/$scale)+1;
                
                // 표시할 페이지($page)에 따라 $start 계산
                $start = (intval($page) - 1) * $scale;

                $number = $total_record - $start;
                for($i=$start;$i<$start+$scale && $i < $total_record; $i++){
                    mysqli_data_seek($result, $i); //가져올 레코드로 이동
                    $row = mysqli_fetch_assoc($result); //하나의 레코드 가져오기
                
                    $num = $row["bGuId"]; //레코드 번호
                    $id = $row["bUserId"]; // 아이디
                    $name = $row["bUserNick"]; //이름
                    $subject = $row["bTitle"]; // 제목
                    $regist_day = $row["bDate"]; // 작성일
                     
                    ?>
                    <!-- 페이지 -->
                    <tr class="notice">
                        <td class="notice_box"><?=$number?></td>
                        <td class="title"><a style="color: black;" href="view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></td>
                        <td class="author"><?=$name?></td>
                        <td class="time"><?=$regist_day?></td>
                    </tr>
                    <?php
                    $number--;
                }
                mysqli_close($con);
                    ?>
                </tbody>
                </table>

                <footer id="pageMenu">
                <!--페이지 번호 매김-->
                    <ul class="page_num" id="page1">
                <?php
                if ($total_page>=2&& $page >= 2){
                    $new_page = $page - 1;
                    echo "<li><a class='pageMenu' href='studyBoard.php?page=$new_page' style='color:black'>이전</a></li>";
                } else
                    echo "<li class='pageMenu'>&nbsp;<li>";
                // 게시판 목록 하단에 페이지 링크 번호 출력
                for ($i=1; $i<=$total_page;$i++){
                    if ($page == $i && $i!=0) // 현재 페이지 번호 링크 안함
                        echo "<li class='pageMenu'>$i</li>";
                    else
                        echo "<li class='pageMenu'><a href='studyBoard.php?page=$i' style='color:black'>$i</a></li>";
                }
                if ($total_page>=2 && $page != $total_page) {
                    $new_page = $page + 1;
                    echo "<li class='pageMenu'><a href='studyBoard.php?page=$new_page' style='color:black'>다음</a></li>";    
                } else
                    echo "<li class='pageMenu'>&nbsp;</li>";
?>  
                </ul>    <!-- 페이지 번호 매김 끝-->
                <ul class="buttons" id="page2">  
                    <li>&nbsp;</li>
                    <li><button onclick="location.href='studyBoard.php?page=<?=$page?>'">목록</button></li>
                    <li><button onclick="location.href='insertBoard.php'">글쓰기</button></li>
                    <li>&nbsp;</li>
                </ul>
                </footer>
        </div>
    </div>    
</div>

</body>
</html>
