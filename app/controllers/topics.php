<?php
die();
session_start();
//include_once "../../app/database/db.php";
include site_root . "/app/database/db.php";

$errMsg = '';
$id = '';
$name = '';
$description = '';
$topics = selectAll('topics');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])){

//    tt($_POST);
////    var_dump($_POST);
//    exit();
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === ''){
        $errMsg = "Не всі поля заповнені";
    }elseif (mb_strlen($name, 'UTF-8') <2){
        $errMsg = "Довжина категорії менше 2-х символів";
    } else {
        $existence = selectOne('topics', ['name' => $name]);
        if ($existence['name'] === $name){
            $errMsg = "Категорія вже існує";
        } else{
            $topic = [
                'name' => $name,
                'description' => $description
            ];
            $id = insert('topics', $topic);
            $topic = selectOne('topics', ['id' => $id]);
            $errMsg = "Категорію створено";
        }
    }

}   else{
    $name = '';
    $description = '';
}


//Update category
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){

    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])){
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if ($name === '' || $description === ''){
        $errMsg = "Не всі поля заповнені";
    }elseif (mb_strlen($name, 'UTF-8') <2){
        $errMsg = "Довжина категорії менше 2-х символів";
    } else {
        $existence = selectOne('topics', ['name' => $name]);
        if ($existence['name'] === $name){
            $errMsg = "Категорія вже існує";
        } else{
            $topic = [
                'name' => $name,
                'description' => $description
            ];
            $id = $_POST['id'];
            $topic_id = update('topics', $id, $topic);
            $errMsg = "Категорію оновлено";
        }
    }
}
//Del category
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $k = base_url . 'admin/topics/index.php';
    delete('topics', $id);
//    if (!headers_sent()){
    echo ob_get_contents();
    header('location: ' . base_url . 'admin/topics/index.php');
//    } else
//        echo '<script type="text/javascript">window.location.href=$k</script>';
}