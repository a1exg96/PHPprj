<?php include("path.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOG PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b401c84f44.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="container-fluid fix">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1><a href="<?php echo base_url ?>">My Blog</a></h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo base_url ?>"><i class="fa-solid fa-house-chimney"></i>Головна</a> </li>
                    <li><a href="<?php echo base_url . 'gallery.php'?>"><i class="fa-solid fa-image"></i>Галерея</a> </li>
                    <li><a href="<?php echo base_url , 'about.php'?>"><i class="fa-solid fa-address-book"></i>Контакти</a> </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-person"></i>Кабінет</a>
                        <ul>
                            <li><a href="log.php">Адмін панель</a></li>
                            <li><a href="#">Вихід</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>