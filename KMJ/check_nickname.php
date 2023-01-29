<!-- 닉네임 중복체크 스크립트창 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        .close { margin: 20px 0 0 120px; cursor: pointer;}
    </style>
</head>
<body>
    <h3>닉네임 중복체크</h3>
    <div>
    <?php
    $userNick = $_GET["nick"];

    if(!$userNick){
        echo ("닉네임을 입력해 주세요!");
    }
    else{
        $con = mysqli_connect("localhost", "KMJ", "123456", "miniproject");
        $sql1 = "select * from usertable where userNick='$userNick'";
        $sql2 = "select * from admintable where adminNick='$userNick'";
        $result1 = mysqli_query($con, $sql1);
        $result2 = mysqli_query($con, $sql2);
        $num_record1 = mysqli_num_rows($result1);
        $num_record2 = mysqli_num_rows($result2);

        if($num_record1 || $num_record2){
            echo $userNick . "닉네임은 중복됩니다.<br>";
            echo "다른 닉네임을 사용해 주세요!<br>";
        }
        else{
            echo $userNick . "닉네임을 사용 가능합니다.<br>";
        }
        mysqli_close($con);
    }
    ?>    
    </div>
    <div class="close">
        <button onclick="javascript:self.close()">창닫기</button>
    </div>
</body>
</html>
