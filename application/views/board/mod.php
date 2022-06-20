<h1>디테일!!!</h1>

<div><?=$this->data->i_board?></div>
<div><?=$this->data->title?></div>

<form action="/board/modProc" method="post">
    <input type="hidden" name="i_board" value="<?=$this->data->i_board?>">
    <div><input type="text" name="title" value="<?=$this->data->title?>"></div>
    <div><input type="submit" value="수정">
</form>