<?php 

session_start();

require_once("connDB.php");

$uGuId = $_SESSION["uGuId"];
$userId = $_SESSION["userId"];
$userNick = $_SESSION["userNick"];
$bCategory = $_POST["bCategory"];
$bTitle = $_POST["bTitle"];
$bContext = $_POST["bContext"];
$searchType = $_POST["searchType"];


$boardList = array($userId, $bTitle, $bContext, $userNick, $bCategory, $uGuId);

echo var_dump($boardList);

switch($searchType){
    case "insertBoard":
        insertBoard($conn, $boardList);
        break;
    case "updateBoard":
        $bGuId = $_POST["bGuId"];
        updateBoard($conn, $boardList, $bGuId);
        break;
}


function insertBoard($argConn, $argList){
    if($argList[4] !== "공지"){
        $sql = "insert into boardTable (bUserId, bTitle, bContext, bUserNick, bCategory) ";
        $sql .= "values ('$argList[0]', '$argList[1]', '$argList[2]', '$argList[3]', '$argList[4]');";
    }
    else{
        $sql = "insert into noticeTable (nAdminId, nTitle, nContext, nAdminNick) ";
        $sql .= "values ('$argList[0]', '$argList[1]', '$argList[2]', '$argList[3]');";
    }
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

function updateBoard($argConn, $argList, $argbGuId){
    if($argList[4] === "공지"){
        $sql = "update noticeTable set ";
        $sql .= "nTitle = '$argList[1]', nContext = '$argList[2]', nAdminNick = '$argList[3]' where nGuId = '$argbGuId'";
    }
    else{
        $sql = "update boardTable set ";
        $sql .= "bTitle = '$argList[1]', bContext = '$argList[2]', bUserNick = '$argList[3]', bCategory = '$argList[4]' where bGuId = '$argbGuId'";
    }

    $result = mysqli_query($argConn, $sql);
    
    if($result){
        echo "<script>
                alert('수정 완료')
                history.go(-2);
            </script>";
    }
    else{
        echo "<script>
                alert('수정 실패')
                history.go(-2);
            </script>";
    }

}


?>