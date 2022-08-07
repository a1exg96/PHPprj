<?php
    include "../../app/include/header-admin.php";
    include "../../app/database/db.php";
//?>

<div class="container">
    <?php include "../../app/include/sidebar-admin.php";?>
        <div class="posts col-8">
            <div class="button row">
                <a href="<?php echo base_url . "admin/posts/created.php";?>" class="col-3 btn btn-success">Створити пост</a>
                <span class="col-1"></span>
                <a href="<?php echo base_url . "admin/posts/index.php";?> class="col-3 btn btn-warning">Редактувати</a>
            </div>
            <div class="row title-table">
                <h2>Управління записами</h2>
                <div class="col-1">ID</div>
                <div class="col-5">Назва</div>
                <div class="col-2">Автор</div>
                <div class="col-4">Управління</div>
            </div>
            <?php
            for($i=0;$i<10;$i++){ ?>
            <div class="row post">
                <div class="id col-1">1</div>
                <div class="title col-5">Якась стаття</div>
                <div class="autor col-2">Адмін</div>
                <div class="red col-2"><a href="">EDIT</a></div>
                <div class="del col-2"><a href="">DEL</a></div>
            </div>
            <?php } ?>
            <br>
        </div>
    </div>

</div>

    <!--Footer-->
<?php include ("../../app/include/footer.php"); ?>