<?php 

session_start();

require_once("connDB.php");

$userId = $_SESSION["userId"];
$userNick = $_SESSION["userNick"];
$bCategory = $_POST["bCategory"];
$bTitle = $_POST["bTitle"];
$bContext = $_POST["bContext"];
$searchType = $_POST["searchType"];

$boardList = array($userId, $bTitle, $bContext, $userNick, $bCategory);

echo var_dump($boardList);

switch($searchType){
    case "insertBoard":
        insertBoard($conn, $boardList);
        break;
    case "updateBoard":
        updateBoard();
        break;
}


function insertBoard($argConn, $argList){
    $sql = "insert into boardTable (bUserId, bTitle, bContext, bUserNick, bCategory) values ('$argList[0]', '$argList[1]', '$argList[2]', '$argList[3]', '$argList[4]');";
    $result = mysqli_query($argConn, $sql);
    
    if($result){
        echo "<script>
                alert('작성 완료')
                history.go(-2);
            </script>";
    }
    else{
        echo "<script>
                alert('작성 실패')
                history.go(-2);
            </script>";
    }

}

function updateBoard(){
    $sql = "update into (bGuId, bTitle, bContext, bNick";
}


?>