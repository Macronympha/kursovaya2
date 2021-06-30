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
              <a href="basket.php" class="p-2"><span class="fa fa-sign-in"></span></a>
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

  <h1>Авторизации</h1>
  <form action="vendor/auth.php" method="post">
    <input type="text" name="login" id="login" placeholder="Введите логин"><br>
    <input type="password" name="pass" id="pass" placeholder="Введите пароль"><br>
    <button type="submit">Авторизоваться</button>
  </form>
</p>
</div>
</div>
</div>
</div>
</section>
</body>
</html>