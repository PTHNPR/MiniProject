//메인콘텐트 
<div class="notice"> //notice, qna 우리가 정한 걸로 바꿔야함(변수이름,db이름)
    <h4> 최신 글</h4>
<?php
    include "../include/db_connect.php";

    $sql = "select * from _notice order by num desc limit 5";
    $result = mysqli_query($con, sql);

    while($row = mysqli_fetch_assoc($result)) {
        $num = $row["num"];
        $name = $row["name"];
        $date = $row["regist_day"];
        $date = substr($date, 0, 10);

        $subject = $row["subject"];
        $subject = htmlspecialchars_decode($subject, ENT_QUOTES);
?>
        <div class="item">
            <span class="col1"><a href="../mboard/index.php?
                type=view&table=_notice&num=<?=$num?>&page=1">
                <?=$subject ?></a>
            </span>
            <span class="col2"><?=$date?></span>
        </div>
    <?php
    }
?>
</div><!--최신 글 밑 공지사항-->
<div class="qna">
    <h4>전체</h4>
<?php
    $sql = "select * from_qna order by num desc limit 5";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
        $num = $row["num"];
        $name = $row["name"];
        $date =$row["regist_day"];
        $date = substr($date, 0, 10);

        $subject = $row["subject"];
        $subject = htmlspecialchars_decode($subject, ENT_QUOTES);
?>
        <div class="item">
            <span class ="clo1"><a href="../mboard/index.php?
            type=view&table=_qna&num+<?=$num?>&page=1">
            <?=$subject ?></a>
            <?php
                $sql = "select * from _qna_ripple where parent=$num";
                $result2 = mysqli_query($con, $sql);
                $num_ripple = mysqli_num_rows($result2);

                if ($num_ripple)
                        echo " [$num_ripple]";
             ?>
        </span>
        <span class="col2"><?=$date?></span>
    </div>
<?php
    }

    mysqli_close($con);
?>
</div><!--자유, study게시판-->