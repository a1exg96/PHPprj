<?php
//session_start();
include site_root . "/app/database/db.php";

$errMsg = '';
$id = '';
$title = '';
$content = '';
$topic = '';
$img = '';

$topics = selectAll('topics');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])){

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);
    //    tt($_POST);

    if ($title === '' || $content === '' || $topic === ''){
        $errMsg = "Не всі поля заповнені";
    }elseif (mb_strlen($title, 'UTF-8') <7){
        $errMsg = "Довжина назви статті менше 7 символів";
    } else {
        $post = [
            'id_user'=> $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'img' => $_POST['img'],
            'status' => 1,
            'id_topic' => $topic
        ];
        $post = insert('posts', $post);
        $post = selectOne('posts', ['id' => $id]);
        $errMsg = "Статтю створено";
        }

}   else{
    $title = '';
    $content = '';
}


////Update category
//if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
//
//    $id = $_GET['id'];
//    $topic = selectOne('topics', ['id' => $id]);
//    $id = $topic['id'];
//    $name = $topic['name'];
//    $description = $topic['description'];
//}
//if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])){
//    $name = trim($_POST['name']);
//    $description = trim($_POST['description']);
//
//    if ($name === '' || $description === ''){
//        $errMsg = "Не всі поля заповнені";
//    }elseif (mb_strlen($name, 'UTF-8') <2){
//        $errMsg = "Довжина категорії менше 2-х символів";
//    } else {
//        $existence = selectOne('topics', ['name' => $name]);
//        if ($existence['name'] === $name){
//            $errMsg = "Категорія вже існує";
//        } else{
//            $topic = [
//                'name' => $name,
//                'description' => $description
//            ];
//            $id = $_POST['id'];
//            $topic_id = update('topics', $id, $topic);
//            $errMsg = "Категорію оновлено";
//        }
//    }
//}
////Del category
//if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
//    $id = $_GET['del_id'];
//    $k = base_url . 'admin/topics/index.php';
//    delete('topics', $id);
//    if (!headers_sent()){
//        header('location: ' . base_url . 'admin/topics/index.php');
//    } else
//        echo '<script type="text/javascript">window.location.href=$k</script>';
//}