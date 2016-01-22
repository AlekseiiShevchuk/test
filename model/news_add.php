<?php
include 'db_func.php';
if($_POST){
    news_add($_POST['catid'],$_POST['title'],$_POST['text']);
    header('Location:../view/news_add_form.php');
}else{
    echo 'Данные от пользователя не пришли или не корректны';
}
