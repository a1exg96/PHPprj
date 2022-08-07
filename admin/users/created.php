<?php include "../../app/database/db.php";
include "../../app/include/header-admin.php";
//?>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/scripts.js"></script>
    <div class="container">
        <?php include "../../app/include/sidebar-admin.php";?>
            <div class="posts col-8">
                <div class="button row">
                    <a href="created.php" class="col-3 btn btn-success">Створити </a>
                    <span class="col-1"></span>
                    <a href="index.php" class="col-3 btn btn-warning">Управління</a>
                </div>
                <div class="row title-table">
                    <h2>Додати корситувача</h2>
                </div>
                <div class="row add-post">
                    <form action="created.php" method="post">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Логін</label>
                            <input type="text" name="login" value="<?=$login?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Придумайте ваш логін">
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" value="<?=$email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <label for="exampleInputPassword1" class="form-label">Пароль</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <label for="exampleInputPassword1" class="form-label">Повторіть пароль</label>
                            <input type="password" name="conf_pass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>User</option>
                            <option value="1">Admin</option>
                        </select>
                        <div class="col">
                            <button class="btn btn-primary" type="submit">Створити корситувача</button>
                        </div>
                    </form>
                </div>
                <br>
            </div>
        </div>

    </div>

    <!--Footer-->
<?php include ("../../app/include/footer.php"); ?>