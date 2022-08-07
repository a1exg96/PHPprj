<?php
    include "../../app/include/header-admin.php";
    include "../../app/controllers/topics.php";
?>
    <div class="container">
        <?php include "../../app/include/sidebar-admin.php";?>
            <div class="posts col-8">
                <div class="button row">
                    <a href="<?php echo base_url . "admin/topics/created.php";?>" class="col-3 btn btn-success">Створити категорію</a>
                    <span class="col-1"></span>
                    <a href="<?php echo base_url . "admin/topics/index.php";?>" class="col-3 btn btn-warning">Редактувати</a>
                </div>
                <div class="row title-table">
                    <h2>Управління категоріями</h2>
                    <div class="col-1">ID</div>
                    <div class="col-5">Назва</div>
                    <div class="col-4">Управління</div>
                </div>
                <?php foreach ($topics as $key => $topic): ?>
                    <div class="row post">
                        <div class="id col-1"><?= $key+1; ?></div>
                        <div class="title col-5"><?= $topic['name']; ?></div>
                        <div class="red col-2"><a href="edit.php?id=<?=$topic['id'];?>">EDIT</a></div>
                        <div class="del col-2"><a href="edit.php?del_id=<?=$topic['id'];?>">DEL</a></div>
                    </div>
                <?php endforeach; ?>
                <br>
            </div>
        </div>

    </div>

    <!--Footer-->
<?php include ("../../app/include/footer.php"); ?>