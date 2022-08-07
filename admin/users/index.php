<?php include "../../app/database/db.php";
include "../../app/include/header-admin.php";
//?>
    <div class="container">
        <?php include "../../app/include/sidebar-admin.php";?>
            <div class="posts col-8">
                <div class="button row">
                    <a href="<?php echo base_url . "admin/users/created.php";?>" class="col-3 btn btn-success">Створити користувача</a>
                    <span class="col-1"></span>
                    <a href="<?php echo base_url . "admin/users/index.php";?>" class="col-3 btn btn-warning">Редактування</a>
                </div>
                <div class="row title-table">
                    <h2>Управління користувачами</h2>
                    <div class="col-1">ID</div>
                    <div class="col-5">Логін</div>
                    <div class="col-2">Роль</div>
                    <div class="col-4">Управління</div>
                </div>
                    <div class="row post">
                        <div class="id col-1">1</div>
                        <div class="title col-5">AlexG</div>
                        <div class="autor col-2">Admin</div>
                        <div class="red col-2"><a href="">EDIT</a></div>
                        <div class="del col-2"><a href="">DEL</a></div>
                    </div>
                    <div class="row post">
                        <div class="id col-1">2</div>
                        <div class="title col-5">AnnaGalkina</div>
                        <div class="autor col-2">User</div>
                        <div class="red col-2"><a href="">EDIT</a></div>
                        <div class="del col-2"><a href="">DEL</a></div>
                    </div>
                    <div class="row post">
                        <div class="id col-1">3</div>
                        <div class="title col-5">Pacyu4ik</div>
                        <div class="autor col-2">User</div>
                        <div class="red col-2"><a href="">EDIT</a></div>
                        <div class="del col-2"><a href="">DEL</a></div>
                    </div>
                <br>
            </div>
        </div>

    </div>

    <!--Footer-->
<?php include ("../../app/include/footer.php"); ?>