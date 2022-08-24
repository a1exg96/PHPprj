<?php //include "app/database/db.php";
include "path.php";
include "app/controllers/topics.php";
include "app/include/header.php";
$posts = selectAllFromPostsWithUsersonIndex('posts','users');
$topTopic = selectTopicsFromPostsonIndex('posts');
//        tt($topTopic);
?>
    <!--Блок Каруселі-->
    <div class="container">
    <div class="row">
        <h2 class="slider-title">Топ публікації</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-inner">
                <?php foreach ($topTopic as $key => $post):?>
                <?php if ($key == 0):?>
                <div class="carousel-item active">
                    <?php else:?>
                    <div class="carousel-item">
                        <?php endif;?>
                        <img src="<?=base_url. 'assets/res/posts/' .$post['img'];?>" class="d-block w-100" alt="<?=$post['title'];?>">
                        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                            <h5><a href="<?=base_url. 'single.php?post=' .$post['id'];?>"><?=substr($post['title'], 0, 30);?></a></h5>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--Кінець каруселі-->

    <!--Block Main-->
    <div class="container">
        <div class="content row">
            <div class="main-content col-md-9 col-12">
                <h2>Останні публікцї</h2>
                <?php foreach ($posts as $key => $pos):?>
                    <div class="post row">
                        <div class="img cal-12 col-md-4">
                            <img src="<?=base_url. 'assets/res/posts/' .$pos['img'];?>" alt="<?=$pos['title'];?>" class="img-thumbnail">
                        </div>
                        <div class="post_text col-12 col-md-8">
                            <h3>
                                <a href="<?=base_url. 'single.php?post=' .$pos['id'];?>"><?=substr($pos['title'], 0, 30);?></a>
                            </h3>
                            <i class="far fa-user"> <?=$pos['username'];?></i>
                            <i class="far fa-calendar"> <?=$pos['created_date'];?></i>
                            <p class="prewiev-text">
                                <?=mb_substr($pos['content'],'0','150','utf8').'...';?>
                            </p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="sidebar col-md-3 col-12">
                <div class="section search">
                    <h3>Пошук</h3>
                    <form action="search.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>
                <div class="section topics">
                    <h3>Topics</h3>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="#"><?= $topic['name']; ?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Block MAin end-->
    <!--Footer-->
<?php include ("app/include/footer.php"); ?>