<?php
include 'model/db_func.php';
$category = news_get_category();
foreach($category as $row){
    echo $row['catid'].' - '.$row['name'].'<br>';
}