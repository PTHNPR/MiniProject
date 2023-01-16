                <div class="table_division">
                    <div class="t_category">구 분</div>
                    <div class="t_title" id="t_title" style="text-align: center;">제 목</div>
                    <div class="t_nick">작성자</div>
                    <div class="t_date">날 짜</div>
                </div>
                <div class="admin_noticeDiv">
                    <table class="admin_noticeTable">
                        <tbody>
                        <?php 
                            for($i = 0; $i < $noticeLen; $i++){       
                            ?>
                            <tr>
                                <td class="t_category" id="t_notice">&#60;공 지&#62;</td>
                                <td class="t_title" id="t_title" onclick="location.href='selectBoard.php?num=<?= $noticeArr[$i][3]; ?>'"><?= $noticeArr[$i][0]; ?></td>
                                <td class="t_nick"><?= $noticeArr[$i][1]; ?></td>
                                <td class="t_date"><?= $noticeArr[$i][2]; ?></td>
                            </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>