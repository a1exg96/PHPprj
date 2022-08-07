<?php //include "../../app/database/db.php";
include "../../app/include/header-admin.php";
include "../../app/controllers/topics.php";
//?>

    <div class="container">
        <?php include "../../app/include/sidebar-admin.php";?>
        <div class="posts col-8">
            <div class="button row">
                <a href="<?php echo base_url . "admin/topics/created.php";?>" class="col-3 btn btn-success">Створити категорію</a>
                <span class="col-1"></span>
                <a href="<?php echo base_url . "admin/topics/index.php";?>" class="col-3 btn btn-warning">Редактувати</a>
            </div>
            <div class="row title-table">
                <h2>Оновлення категорії</h2>
            </div>
            <div class="row add-post">
                <div class="mb-12 col-12 col-md-12 err">
                    <p><?=$errMsg?></p>
                </div>
                <form action="edit.php" method="post">
                    <input name="id" value="<?=$id;?>" type="hidden">
                    <div class="col">
                        <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Ім'я категорії" aria-label="Ім'я категорії">
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Опис категорії</label>
                        <textarea class="form-control" name="description" id="content" rows="2"><?=$description;?></textarea>
                    </div>
                    <div class="col">
                        <button name="topic-edit" class="btn btn-primary" type="submit">Оновити категорію</button>
                    </div>
                </form>
            </div>
            <br>
        </div>
    </div>

    </div>

    <!--Footer-->
<?php include ("../../app/include/footer.php"); ?>