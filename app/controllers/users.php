<?php
session_start();
require "path.php";
require "app/database/db.php";
$errMsg = '';
$regStatus = '';

function autor($val){
    $_SESSION['id'] = $val['id'];
    $_SESSION['login'] = $val['username'];
    $_SESSION['admin'] = $val['admin'];

    if($_SESSION['admin']){
        header('location: ' . base_url. "/admin/posts/index.php");
    } else {
        header('location: ' . base_url);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    $passc = trim($_POST['conf_pass']);

    if ($login === '' || $email === '' || $pass === ''){
        $errMsg = "Не всі поля заповнені";
    }elseif (mb_strlen($login, 'UTF-8') <2){
        $errMsg = "Довжина логіну менше 2-х символів";
    }elseif ($pass !== $passc){
        $errMsg = "Паролі не співпадають";
    } else {
        $existence = selectOne('users', ['email' => $email]);
        if ($existence['email'] === $email){
            $errMsg = "Користувач з такою поштою вже існує";
        } else{
            $pass = password_hash($passc, PASSWORD_DEFAULT);
             $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
        $id = insert('users', $post);
        $user = selectOne('users', ['id' => $id]);
        autor($user);
        }
    }

}   else{
    $login = '';
    $email = '';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);

    if ($email === '' || $pass === ''){
        $errMsg = "Не всі поля заповнені";
    }else{
        $existence = selectOne('users', ['email' => $email]);
//        tt($existence);
        if ($existence && password_verify($pass, $existence['password'])){
           autor($existence);
        } else{
            $errMsg = "Невірна пошта чи пароль";
        }
    }
}   else{
    $email = '';
}