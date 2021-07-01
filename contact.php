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
              <a href="authorization.php" class="p-2"><span class="fa fa-user-circle"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <section class="home-slider inner-page owl-carousel">
    <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
      
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 element-animate">
            <h1>Отзывы</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
      </div>
      <div class="row element-animate">
        <div class="major-caousel js-carousel-1 owl-carousel">
          <div>
            <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $reviews = mysqli_query($connect, "SELECT * FROM `reviews`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $reviews = mysqli_fetch_all($reviews);
            foreach ($reviews as $review) {
              ?>

              <div class="media text-center">
                <img src="img/person_1.png" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black"><?= $review[1] ?></h3>
                  <p>&ldquo;<?= $review[4] ?>&ldquo;</p>

                </div>

              </div>
            </div>
            <div>
              <?php
            }
            ?>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class=" heading mb-4">Оставьте свой отзыв</h2>
        <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
      </div>
    </div>
    <div class="row">
      
      <div class="col-md-6 mb-5 order-2">

        <form action="vendor/create_rewiews.php" method="post">
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="name">ФИО</label>
              <input type="text" name="FIO" class="form-control"placeholder="Иванов Иван Иванович">
            </div>
            <div class="col-md-6 form-group">
              <label for="phone">Номер телефона</label>
              <input type="text" name="number_phone" class="form-control" placeholder="+79999999999">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" placeholder="email@mail.ru">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="message">Оставьте Ваш отзыв о нас</label>
              <textarea name="reviews" id="message" class="form-control " cols="30" rows="8"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <button type="submit" class="btn btn_shop mt-3">Отправить</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6 order-2 mb-5">
        <img class="img-fluid" src="img/reviews.png" alt="logo">
      </div>
    </div>
  </div>
</section>






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