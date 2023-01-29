<?php 
session_start();
require_once("php/connDB.php");

$sUserId = $_SESSION["userId"];
$boardNum = $_GET['num'];
$sql = "";

if($_GET['Category'] === "공지"){
    $sql = "select nGuId AS bGuId, nAdminId AS nUserId, nTitle AS bTitle, nContext AS bContext, ";
    $sql .= "nAdminNick AS bUserNick, nDate AS bDate from noticeTable where nGuId = $boardNum;";
}
else{
    $sql = "select * from boardTable where bGuId = $boardNum;";
}

$result = mysqli_query($conn, $sql);

$boardArr = mysqli_fetch_assoc($result);

$comfAdIdSql = "select adminId from adminTable;";


$flagNum = 0; // php에서는 true이면 1, false이면 빈값 or 0을 출력한다

$adminResult = mysqli_query($conn, $comfAdIdSql);
$aIdArr = mysqli_fetch_all($adminResult);
$aIdArrLen = mysqli_num_rows($adminResult);

for($i = 0; $i < $aIdArrLen; $i++){
    if($sUserId === $aIdArr[$i][0]){
        $flagNum = 1; // 
        break;
    }
}

if(($_GET['Category'] === "공지") and $flagNum === 0){
    echo "<script>
            alert('접근 권한이 없습니다.');
            history.back();
        </script>";
}
else if($sUserId !== $boardArr["bUserId"]){
    echo "<script>
            alert('접근 권한이 없습니다.');
            history.back();
        </script>";
}



?>


<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>게시판 수정</title>
        <link rel="stylesheet" href="css/typeBoard.css">
        <script src="js/typeBoard.js"></script>
    </head>
    <body> 
        <?php require_once("php/header.php");  ?> <!-- 헤더 파일 -->
        <container class="board_container">
            <div class="board_div">
                <div class="board_title">
                    <span>게시판 수정</span>
                </div>
                <div class="board_form_div" id="board_form_div">
                    <form class="board_form" id="board_form" method="POST" action="php/typeBoardSv.php">
                        <div class="form_input_title">
                            <label for="input_title">
                                <span class="input_title_span">Title</span>
                            </label>
                            <input type="text" class="input_title" id="input_title" name="bTitle" value="<?= $boardArr['bTitle'] ?>">
                        </div>
                        <div class="search_Category">
                            <?php if($_GET['Category'] === "공지"){ ?>
                                <input type="hidden" name="bCategory" value="공지">
                            <?php }else{  ?>
                            <span class="input_title_span">Category</span>
                            <select name="bCategory" class="sel_category" required>
                                <option value="자유">자유</option>
                                <option value="STUDY">STUDY</option>
                            </select>
                            <?php } ?>
                        </div>
                        <div class="form_input_context">
                            <div class="context_title_div">
                                <label for="input_context">
                                    <span class="input_title_span">Context</span>
                                </label>
                                <div>( <span id="now_byte">0</span> / <span>500</span> )</div>
                            </div>
                            <textarea class="input_context" id="input_context" onkeyup="checkByte(this)" maxlength="500" name="bContext" cols="75" rows="12"><?= $boardArr['bContext'] ?>"</textarea>
                        </div>
                        <input type="hidden" name="searchType" value="updateBoard">
                        <input type="hidden" name="bGuId" value="<?= $boardNum ?>">
                    </form>
                </div>
                <div class="select_btn_div">
                    <button type="button" onclick="history.back();">취소하기</button>
                    <button type="submit" form="board_form">저장하기</button>
                </div>
            </div>
        </container>
    </body>
    <script src="js/test.js"></script>
</html>