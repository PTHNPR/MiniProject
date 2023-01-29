<!-- 아이디 중복체크 스크립트 창-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        .close { margin: 20px 0 0 120px; cursor: pointer;}
    </style>
</head>
<body>
    <h3>아이디 중복체크</h3>
    <div>
    <?php
    $id = $_GET["id"];

    if(!$id){
        echo ("아이디를 입력해 주세요!");
    }
    else{
        $con = mysqli_connect("localhost", "KMJ", "123456", "miniproject");
        $sql1 = "select * from usertable where userId='$id'";
        $sql2 = "select * from admintable where adminId='$id'";
        $result1 = mysqli_query($con, $sql1);
        $result2 = mysqli_query($con, $sql2);
        $num_record1 = mysqli_num_rows($result1);
        $num_record2 = mysqli_num_rows($result2);
        if($num_record1 || $num_record2){
            echo $id . "아이디는 중복됩니다.<br>";
            echo "다른 아이디를 사용해 주세요!<br>";
        }
        else{
            echo $id . "아이디는 사용 가능합니다.<br>";
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
