<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Diamond Ray</title>
  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
  
  <header role="banner">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <div class="row col-4">
          <div class="col-8 col-sm-6 col-md-6 col-lg-3 col-xl-4 ">
            <img class="img-fluid" src="img/logo.png" alt="logo">
          </div>
          <div class="col-2 col-lg-2 col-xl-2 d-flex align-items-center">
            <a class="navbar-brand absolute" href="index.php">Diamond Ray</a>
          </div>
        </div>

        <!--ГАМБУРГЕР-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"style="background-image: url('img/menu.svg');"></span>
        </button>

        <!--МЕНЮ-->
        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav mx-auto pl-lg-6 pl-md-8">
            <li class="nav-item">
              <a class="nav-link" href="about.html">О питомнике</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="our_dogs.html" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Собаки</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="our_dogs.html">Наши собаки</a>
                <a class="dropdown-item" href="puppy.php">Щенки</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Зоотовары</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Статьи</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Отзывы</a>
            </li>
            <li class="nav-item shop align-items-center justify-content-center">
              <a href="basket.php" class="p-2"><span class="fa fa-shopping-cart"></span></a>
            </li>
            <li class="nav-item shop align-items-center justify-content-center">
              <a href="authorization.php" class="p-2"><span class="fa fa-sign-in"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


<!--СЛАЙДЕР-->
<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image: url('img/shop.jpg');">

    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 element-animate">
          <h1>Зоотовары</h1>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a metus vehicula, eleifend nulla nec, lacinia metus. In porta nisi velit, et dapibus elit accumsan suscipit.</p>
          <p><a href="puppy.php" class="btn btn-white btn-outline-white">Приобрести щенка</a> 
          </div>
        </div>
      </div>

    </div>
  </section>




  <section class="section border-t">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-8 text-center">
          <h2>Что нужно щенку с первых дней в доме?</h2>
          <p class="mb-5">Появлению щенка в новом месте обитания обязательно предшествует определённая подготовка. Причем покупкой еды, миски и подстилки она не должна ограничиваться. Также щенку потребуются другие, может быть, не столь очевидные вещи.</p>
          <p><a href="articles.html#st_1" class="arrow">Читать</a></p>
        </div>
      </div>
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-8 text-center">
          <h2>Как выбрать игрушки для щенка?</h2>
          <p class="mb-5">Игрушки для щенков — это не просто развлечение и веселая игра. В первую очередь, с их помощью они познают мир: учатся приемам защиты и охоты. Кроме того, некоторые виды игрушек способствуют развитию зубов питомца и, конечно, поддерживают его физическую активность. Какие игрушки нужны для щенка?</p>
          <p><a href="articles.html#st_2" class="arrow">Читать</a></p>
        </div>
      </div>
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-8 text-center">
          <h2>Как приучить щенка ходить на пеленку?</h2>
          <p class="mb-5">Приучение собаки к пеленке — процесс длительный и трудоемкий, который требует от владельца терпения. Зато взамен вы получите чистоту в доме и воспитанного питомца. Как этого добиться?</p>
          <p><a href="articles.html#st_3" class="arrow">Читать</a></p>
        </div>
      </div>
      <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $aticle = mysqli_query($connect, "SELECT * FROM `article`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $aticle = mysqli_fetch_all($aticle);
            foreach ($aticle as $articles) {
              ?>

              <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center">
                  <h2><?= $articles[1] ?></h2>
                  <p class="mb-5"><?= $articles[2] ?></p>
                  <p><a href="articles.html" class="arrow">Читать</a></p>
                  <a href="update_article.php?id=<?= $articles[0] ?>" class="p-2"><span class="fa fa-pencil"></span></a>
                  <a href="vendor/delete_article.php?id=<?= $articles[0] ?>" class="p-2"><span class="fa fa-trash"></span></a>
                </div>
              </div>
              <?php
            }
            ?>
          </div>
        </section>


        <h3>Добавить новую статью</h3>
        <form action="vendor/create_article.php" method="post">
          <p>Название</p>
          <input type="text" name="article_name">
          <p>Описание</p>
          <textarea name="article_description"></textarea>
          <p>Статья</p>
          <textarea name="article"> </textarea> <br> <br>
          <button type="submit">Добавить</button>
        </form>


        <footer class="site-footer" role="contentinfo">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-4 mb-5">
                <h3>О питомнике "Diamond Ray"</h3>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
                <ul class="list-unstyled footer-link d-flex footer-social">
                  <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                  <li><a href="#" class="p-2"><span class="fa fa-youtube"></span></a></li>
                  <li><a href="#" class="p-2"><span class="fa fa-vk"></span></a></li>
                </ul>

              </div>
              <div class="col-md-5 mb-5">
                <h3>Контакты</h3>
                <ul class="list-unstyled footer-link">
                  <li class="d-block">
                    <span class="d-block">Адрес:</span>
                    <span class="text-white">Новосибирск, ул. Красный проспект, д. 72</span></li>
                    <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">8 (383) 304-81-78</span></li>
                    <li class="d-block"><span class="d-block">Email:</span><a class="text-white" href="mailto:natk@natk.com">natk@natk.com</a></li>
                  </ul>
                </div>
                <div class="col-md-3 mb-5">
                  <h3>Полезная информация</h3>
                  <ul class="list-unstyled footer-link">
                    <li><a href="about.html">О питомнике "Diamond Ray"</a></li>
                    <li><a href="ourdogs.html">Наши собаки</a></li>
                    <li><a href="shop.html">Зоотовары</a></li>
                    <li><a href="blog.html">Статьи</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
          <!-- END footer -->



          <script src="https://use.fontawesome.com/db6ec85ea2.js"></script>
          <script src="js/jquery-3.2.1.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/owl.carousel.min.js"></script>
          <script src="js/jquery.waypoints.min.js"></script>
          <script src="js/main.js"></script>
        </body>
        </html>