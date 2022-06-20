<!DOCTYPE html>
<html lang="en">
<?php include_once "application/views/template/head.php"; ?>
<body>
    <h1>게시판 목록 페이지 </h1>
    <a href="/board/writeView">글쓰기</a><br>
    <?php
        if (count($this->list) === 0) {
            echo '현재 작성된 글이 없습니다.<br>';
        } else {
            foreach ($this->list as $item) {
    ?>
        <a href="/board/detail?i_board=<?=$item->i_board; ?>"><h3>제목 : <?=$item->title;?></h3></a> 
    <?php   
            }
        }
    
    ?>
</body>
</html>