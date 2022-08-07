<?php
     require "app/controllers/users.php";
     require "app/include/header.php" ;
?>
<link rel="stylesheet" href="assets/css/reg.css">
<!--Form-->
<div class="container">
        <form class="row justify-content-center" method="post" action="reg.php">
            <div class="mb-3 col-12 col-md-4">
                <h2>Форма реєстрації</h2>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4 err">
                <p><?=$errMsg?></p>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputEmail1" class="form-label">Логін</label>
                <input type="text" name="login" value="<?=$login?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Придумайте ваш логін">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" value="<?=$email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Ваша пошта не буде використовуватись для спаму.</div>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1" class="form-label">Повторіть пароль</label>
                <input type="password" name="conf_pass" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <button type="submit" class="btn btn-secondary" name="button-reg">Створити</button>
                <button type="button" class="btn btn-secondary"><a href="log.php">Авторизація</a></button>
            </div>
        </form>
</div>
    <!--кінець form-->
<?php include ("app/include/footer.php"); ?>