<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <title>게시판 작성</title>
        <link rel="stylesheet" href="css/insertBoard.css">
    </head>
    <body> 
        <?php require_once("php/header.php");  ?> <!-- 헤더 파일 -->
        <container class="board_container">
            <div class="board_div">
                <div class="board_title">
                    <span>게시판 작성</span>
                </div>
                <div class="board_form_div">
                    <form class="board_form" id="board_form" method="POST" action="php/instBoardSv.php">
                        <div class="form_input_title">
                            <label for="input_title">
                                <span>제 목</span>
                            </label>
                            <input type="text" class="input_title" id="input_title" name="bTitle">
                        </div>
                        <?php
                            if($_GET["Category"] === "전체"){ 
                        ?>
                        <div class="search_Category">
                            <select name="bCategory" required>
                                <option value="자유">자유</option>
                                <option value="STUDY">STUDY</option>
                            </select>
                        </div>
                        <?php } else{ ?>
                        <input type="hidden" name="bCategory" value="<?= $_GET["Category"]; ?>">
                        <?php } ?>
                        <div class="form_input_context">
                            <label for="input_context">
                                <span>내 용</span>
                            </label>
                            <textarea class="input_context" id="input_context" name="bContext"></textarea>
                        </div>
                        <input type="hidden" name="searchType" value="insertBoard">
                    </form>
                </div>
                <div class="select_btn_div">
                    <button type="button" onclick="history.back();">취소하기</button>
                    <button type="submit" form="board_form">등록하기</button>
                </div>
            </div>
        </container>
    </body>
</html>