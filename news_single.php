<?php
require 'model/db_func.php';
if($_GET)
    $id = (int)$_GET['id'];
$article = news_get_by_id($id);
foreach($article as $row){
?>
    <article class="box post post-excerpt">
        <header>
            <p><?=$row['title']?></p>
        </header>

        <p>
            <?=$row['text']?>
        </p>
        <p>Новость опубликована в категории:<?=$row['name']?> | Дата:<?=date('H:i:s Y-m-d',$row['time'])?><br>
            Ссылка на новость >>><br> <a href="../news_single.php?id=<?=$row['id']?>"><?=$row['title']?></a>
        </p>

    </article>



<?php } ?>
