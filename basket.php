<?php
session_start();


require_once 'config/connect.php';
require_once 'vendor/functions.php';


if ( isset($_GET['delete_id']) && isset($_SESSION['cart_list']) ) {
  foreach ($_SESSION['cart_list'] as $key => $value) {
    if ( $value['id'] == $_GET['delete_id'] ) {
      unset($_SESSION['cart_list'][$key]);
    }   
  }
}


if ( isset($_GET['id']) && !empty($_GET['id']) ) {

  $current_added_course = get_product_by_id($_GET['id']);

  // ...
  if ( !empty($current_added_course) ) {

    if ( !isset($_SESSION['cart_list'])) {
      $_SESSION['cart_list'][] = $current_added_course;
    }


    $course_check = false;

    if ( isset($_SESSION['cart_list']) ) {
      foreach ($_SESSION['cart_list'] as $value) {
        if ( $value['id'] == $current_added_course['id'] ) {
          $course_check = true;
        }
      }
    }


    if ( !$course_check ) {
      $_SESSION['cart_list'][] = $current_added_course;
    }

  } 
  
}

?> 


<!--СЛАЙДЕР-->
<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 element-animate">
          <h1>Мы любим своих питомцев</h1>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a metus vehicula, eleifend nulla nec, lacinia metus. In porta nisi velit, et dapibus elit accumsan suscipit.</p>
          <p><a href="#" class="btn btn-white btn-outline-white">Приобрести щенка</a> <a href="shop.php" class="btn btn-white btn-outline-white">Зоотовары</a></p>
        </div>
      </div>
    </div>

  </div>

  <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-8 text-center col-sm-12 element-animate">
          <h1>Зоотовары</h1>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a metus vehicula, eleifend nulla nec, lacinia metus. In porta nisi velit, et dapibus elit accumsan suscipit. </p>
          <p><a href="#" class="btn btn-white btn-outline-white">Приобрести щенка</a> <a href="shop.php" class="btn btn-white btn-outline-white">Зоотовары</a></p>
        </div>
      </div>
    </div>
    
  </div>
</section>

<div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Корзина
  </div>
  <?php if ( isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) !=0 ) : ?>
  
  <ul>
    <?php foreach( $_SESSION['cart_list'] as $course ) : ?>

     <tr> 
      <td><?php echo $course['name']; ?></td> 
      <td><input type="text" name="quantity[<?php echo $row['id_product'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>" /></td> 
      <td><?php echo $course['description']; ?></td> 
      <td><?php echo $course['price']; ?>&#8381;</td> 
    </tr> 

  <?php endforeach; ?>
</ul>

<?php else : ?>

  <p>
    Ваша корзина пуста
  </p>

<?php endif; ?>




<a href="shop.php">Продолжить покупки</a>
<br>
<a href="#">Оформить заказ</a> 




      <!-- Товар #1 
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>
 
        <div class="image">
          <img src="item-1.png" alt="" />
        </div>
 
        <div class="description">
          <span>Common Projects</span>
          <span>Bball High</span>
          <span>White</span>
        </div>
 
        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="img/plus.svg" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="img/minus.svg" alt="" />
          </button>
        </div>
 
        <div class="total-price">$549</div>
      </div>-->
      
      
      
    </div>

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




      <script src="https://use.fontawesome.com/db6ec85ea2.js"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/basket.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/main.js"></script>
    </body>
    </html>