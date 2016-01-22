<?php
include '../model/db_func.php';
$category = news_get_category();
?>
<form action="../model/news_add.php" method="post">

    Заголовок новости:<br />
<input type="text" name="title" /><br />
Выберите категорию:<br />
<select name="catid">
<?php foreach($category as $row){?>
    <option value="<?=$row['catid']?>"><?=$row['name']?></option>
<?php }?>
</select>
<br />
Текст новости:<br />
<textarea name="text" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="Добавить!" />

</form>