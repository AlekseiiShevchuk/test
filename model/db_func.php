<?php

function db_exec($sql){
    try {
        $db = new PDO("sqlite:D:\\OpenServer\\domains\\test.git\\news.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec($sql);}
    catch(PDOException $e){
        echo $e->getMessage();
    }
    $db = null;
}

function db_query($sql){
    try {
        $db = new PDO("sqlite:D:\\OpenServer\\domains\\test.git\\news.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $db->query($sql);}
    catch(PDOException $e){
        echo $e->getMessage();
    }
    $db = null;
    return $result;
}

function news_get_all(){
    try {
        $db = new PDO("sqlite:D:\\OpenServer\\domains\\test.git\\news.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT n.id, n.title, n.text, n.time, c.name FROM news n INNER JOIN cat c ON n.catid=c.catid ORDER BY n.id DESC";
        $result = $db->query($sql);}
    catch(PDOException $e){
        echo $e->getMessage();
    }
    $db = null;
    return $result;
}

function news_get_by_id($id){
    try {
        $db = new PDO("sqlite:D:\\OpenServer\\domains\\test.git\\news.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT n.id, n.title, n.text, n.time, c.name FROM news n INNER JOIN cat c ON n.catid=c.catid WHERE n.id='$id'";
        $result = $db->query($sql);}
    catch(PDOException $e){
        echo $e->getMessage();
    }
    $db = null;
    return $result;
}

function news_get_category(){
    $sql = "SELECT catid, name FROM cat";
        return db_query($sql);
}

function news_add($catid,$title,$text){
    try {
        $db = new PDO("sqlite:D:\\OpenServer\\domains\\test.git\\news.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $title = $db->quote($title);
        $text = $db->quote($text);
        $time = time();
        $sql = "INSERT INTO news(catid,title,text,time) VALUES($catid,$title,$text,$time)";
        $db->exec($sql);}
    catch(PDOException $e){
        echo $e->getMessage();
    }
    $db = null;}
