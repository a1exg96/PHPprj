<?php //include "app/database/db.php";
      include "app/include/header.php";
      include "app/controllers/topics.php";
?>
<!--Блок Каруселі-->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Топ публікації</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
<!--        <div class="carousel-indicators">-->
<!--            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
<!--            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
<!--            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
<!--        </div>-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/res/db.png" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/res/php.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">Second slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/res/php.png" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">Third slide label</a></h5>
                </div>
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
            <?php
                for ($i=0; $i<6; $i++){
            ?>
            <div class="post row">
                <div class="img cal-12 col-md-4">
                    <img src="assets/res/db.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Стаття на тему розробки</a>
                    </h3>
                    <i class="far fa-user">Ім'я автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                    <p class="prewiev-text">
                        Тема цього розділу - інкапсуляція, наслідування і поліморфізм
                    </p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Пошук</h3>
                <form action="#" method="post">
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