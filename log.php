<?php include ("app/include/header.php"); ?>

<!--Form-->
<div class="container">
    <form class="row justify-content-center" method="post" action="log.php">
        <div class="mb-3 col-12 col-md-4">
            <h2>Авторизація</h2>
        </div>
        <div class="w-100"></div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="button" class="btn btn-secondary">Увійти</button>
            <button type="button" class="btn btn-secondary"><a href="reg.php">Реєстрація</a></button>
        </div>
    </form>
</div>
<!--кінець form-->
<?php include ("app/include/footer.php"); ?>