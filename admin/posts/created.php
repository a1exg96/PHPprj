<?php include "../../app/include/header-admin.php";
include "../../app/controllers/posts.php";
//?>
    <div class="container">
        <?php include "../../app/include/sidebar-admin.php";?>
            <div class="posts col-8">
                <div class="button row">
                    <a href="<?php echo base_url . "admin/posts/created.php";?>" class="col-3 btn btn-success">Створити пост</a>
                    <span class="col-1"></span>
                    <a href="<?php echo base_url . "admin/posts/index.php";?>" class="col-3 btn btn-warning">Редактувати</a>
                </div>
                <div class="row title-table">
                    <h2>Додавання запису</h2>
                </div>
                    <div class="row add-post">
                        <form action="created.php" method="post">
                            <div class="col mb-4">
                                <input name="title" type="text" class="form-control" placeholder="Title" aria-label="Назва статті">
                            </div>
                            <div class="col">
                                <label for="editor" class="form-label">Напишіть статтю</label>
                                <textarea name="content" class="form-control mb-4" id="editor" rows="10"></textarea>
                            </div>
                            <div class="input-group col mb-4 mt-4">
                                <input name="img" type="file" class="form-control" id="InputGroupFile02">
                                <label class="input-group-text" for="InputGroupFile02">Upload</label>
                            </div>
                            <select name="topic" class="form-select mb-4" aria-label="Default select example">
                                <option selected>Виберіть категорію</option>
                                <?php foreach ($topics as $key => $topic): ?>
                                    <option value="<?=$topic['id']?>"><?=$topic['name']?></option>
                                <?php endforeach;?>
                            </select>
                            <div class="col mb-4">
                                <button name="add_post" class="btn btn-primary" type="submit">Додати запис</button>
                            </div>
                        </form>
                    </div>
                <br>
            </div>
        </div>

    </div>

    <!--Footer-->
<?php include ("../../app/include/footer.php"); ?>