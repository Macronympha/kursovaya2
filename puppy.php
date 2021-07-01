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
            <h1>Щенки</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            <p><a href="puppy.php" class="btn btn-white btn-outline-white">Приобрести щенка</a> <a href="shop.php" class="btn btn-white btn-outline-white">Зоотовары</a></p>
          </div>
        </div>
      </div>

    </div>
  </section>


  <section>
    <div class="half d-md-flex d-block">
      <div class="image" style="background-image: url('img/puppy_1.jpg')"></div>
      <div class="text element-animate color__red">
        <h3 class="mb-4 text-center"></h3>
        <div class="mb-5">
          <ul class="push">
           <li>Родители:Мирана+Арчи</li>
           <li>Окрас:Голубой</li>
           <li>Пол:Кобель</li>
           <li>Титул:CW</li>
           <li>День рождения:01.12.2020</li>
           <li>Статус:Готовы к резервированию</li>
         </ul>
       </div>
     </div>
   </div>

   <div class="half d-md-flex d-block">
    <div class="image order-2" style="background-image: url('img/puppy_2.jpg')"></div>
    <div class="text element-animate">
      <h3 class="mb-4 text-center color__red"></h3>
      <div class="mb-5">
        <ul class="push">
          <li>Родители:Мирана+Буль</li>
          <li>Окрас:Черный</li>
          <li>Пол:Сука</li>
          <li>Титул:CW</li>
          <li>День рождения:14.02.2021</li>
          <li>Статус:Готовы к резервированию</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class=" heading mb-4">Оставить заявку на резервацию</h2>
        <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
      </div>
    </div>
    <div class="row">

      <div class="col-md-6 mb-5 order-2">

        <form action="vendor/create_reservation.php" method="post">
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="name">Ваше ФИО</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Иванов Иван Иванович">
            </div>
            <div class="col-md-6 form-group">
              <label for="phone">Номер телефона</label>
              <input type="tel" name="number_phone" class="form-control" placeholder="+79999999999">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="color">Окрас питомца</label>
              <select id="selectID" name="color">
                <option value=”Голубой”>Голубой</option>
                <option value=”Рыжий”>Рыжий</option>
                <option value=”Черный”>Черный</option>
              </select>
            </div>
            <div class="col-md-6 form-group">
              <label for="sex">Пол питомца</label>
              <select id="selectID" name="sex">
                <option value=”Сука”>Сука</option>
                <option value=”Кобель”>Кобель</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">

            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="email">Email</label>
              <input id="email" type="email" name="email" class="form-control" placeholder="email@mail.ru">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="message">Пожелания</label>
              <textarea name="wishes" id="message" class="form-control " cols="30" rows="8"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
             <button type="submit" class="btn_cart mt-3">Отправить</button>
           </div>
         </div>
       </form>
     </div>
     <div class="col-md-6 order-2 mb-5">
      <img class="img-fluid" src="img/reservation.png" alt="logo">
    </div>
  </div>
</div>
</section>
 <div class="container">

      <div class="row">
        <div class="col-md-6 mb-5 order-2">
          <form action="mail.php" method="POST">
            <legend>Получить договор на почту</legend>
            <div class="form-group">
              <label for="">Введите email</label>
              <input type="text" class="form-control" id="" name="user_email" placeholder="mail@mail.ru">
            </div><br>
          
            <button type="submit" >Отправить</button>
          </form>
        </div><!-- .col-sm-4 -->
      </div> <!-- .row -->

    </div><!-- /.container -->
<!--// Выключаем WSDL кэширование
    ini_set ('soap.wsdl_cache_enabled', 0);

    // Выставляем временную зону
    date_default_timezone_set('Europe/Moscow');

    // Создаём экземпляр объекта Soap и передаём ему свои учетные данные
    $soap = new SoapClient('https://api.livedocx.com/1.2/mailmerge.asmx?WSDL');
    $soap->LogIn(
        array(
            'username' => 'yourusername',
            'password' => 'yourpassword'
        )
    );

    // Путь к файлу шаблона
    $data = file_get_contents('contract_bid_for_customer.doc');

    // Установка расширения файла .doc и параметров кодирования
    $soap->SetLocalTemplate(
        array(
            'template' => base64_encode($data),
            'format'   => 'doc'
        )
    );

    // Задаём значения переменным
    $fieldValues = array (
        'orderNum'  => 'Номер заказа',
        'orderDay'  => 'Дата заказа'
    );

    // Эта хитрая функция преобразует массив c переменными в то что понимает SOAP
    function assocArrayToArrayOfArrayOfString ($assoc)
    {
        $arrayKeys   = array_keys($assoc);
        $arrayValues = array_values($assoc);
        return array ($arrayKeys, $arrayValues);
    }

    // Передаём переменные в наш LiveDocx объект
     $soap->SetFieldValues(
        array (
            'fieldValues' => assocArrayToArrayOfArrayOfString($fieldValues)
        )
    );

    // Формируем документ
    $soap->CreateDocument();
    $result = $soap->RetrieveDocument(
        array(
            'format' => 'doc'
        )
    );
    $doc = base64_decode($result->RetrieveDocumentResult);
    
    // Разрываем сессию с SOAP 
    $soap->LogOut();

    // Отдаём вордовский файл  
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    $fileName = "Документ.doc";
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/msword");
    header("Content-Transfer-Encoding: binary");
    echo $doc;
    die;
  -->



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