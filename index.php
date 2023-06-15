<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dori</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/lightslider.css">
  <script type="text/Javascript" src="js/JQuery.js"></script>
  <script type="text/Javascript" src="js/lightslider.js"></script>
</head>

<body>
  <div class="header">
    <img class="cc" src="img/Group 110.svg" alt="">
      <div class="nav">
        <a class="nav-item" href="about us.html">О КОМПАНИИ</a>
        <a class="nav-item" href="#">ДОСТАВКА</a>
        <a class="nav-item" href="#КОНТАКТЫ">КОНТАКТЫ</a>
        <a class="nav-item" href="index.php">ГЛАВНАЯ</a>
        <?php //проверка на админа
          if (!empty($_SESSION['admin'])): ?>
          <a class="nav-item" href="php-core/admin-index.php">АДМИНКА</a>
        <?php endif;?>
        
      <?php //проверка на сессию и соответствующий вид хедера
       if (!empty($_SESSION['auth'])): ?>
        <p class="nav-item">Вы вошли как <?php echo $_SESSION['username']; ?></p>
        <div class="fot">
        <a class="foto" href="@">
          <img class="cart-auth" src="img/cart.svg" alt="">
        </a>
      </div>
      <a class="nav-item" href="php-core/logout.php">Выйти</a>
      <?php else: ?>
        <div class="fot">
        <a class="foto" href="@">
          <img class="cart" src="img/cart.svg" alt="">
        </a>
      </div>
      <div class="prof">
        <a href="forms.php">
          <img class="profile" src="img/user-circle-svgrepo-com.svg" alt="">
        </a>
      </div>
      <?php endif; ?>
    </div>
  </div>


  <div class="container">
    <div class="nomer">
      <div class="ru">
        <img class="ruru" src="img/ru.svg">
      </div>

      <div class="car">
        <img class="bibika" src="img/bibika.svg" alt="">
      </div>

      <div class="text">
        <h2 class="nomber">
          +7 (909) 699-71-11
          </h1>

          <h2 class="mail">
            zakaz@dori-msk.ru
            </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="logo">
      <img src="img/logo.svg" width="1200px" alt="">
    </div>
  </div>

  <div class="container">
    <div>
      <h1 class="more">
        МОРЕПРОДУКТЫ КУПИТЬ <br>В МОСКВЕ С ДОСТАВКОЙ
      </h1>
    </div>
  </div>

  <div class="container">
    <div class="popular">
      <h1>
        ПОПУЛЯРНЫЕ ТОВАРЫ
      </h1>
    </div>
  </div>

  <div class="container">
    <div class="slider">
      <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">

          <div class="bod">
            <div class="box">

              <div class="slide-img">
                <img src="img/11.png" alt="1">
                <div class="overlay">
                  <a href="#" class="buy-btn">В КОРЗИНУ</a>
                </div>
              </div>

              <div class="detail-box">

                <div class="type">

                  <a href="#">КАЛЬМАР ЛОЛИГО ЗАМОРОЖЕННЫЙ</a>
                  <span>Цена за 600г.</span>
                </div>

                <a href="#" class="price">700р.</a>

              </div>

            </div>
          </div>
        </li>

        <li class="item-b">

          <div class="bod">
            <div class="box">

              <div class="slide-img">
                <img src="img/10.png" alt="2">
                <div class="overlay">
                  <a href="#" class="buy-btn">В КОРЗИНУ</a>
                </div>
              </div>

              <div class="detail-box">

                <div class="type">

                  <a href="#">ЛАНГУСТИНЫ ЯПОНСКИЕ "СКАМПИ"</a>
                  <span>Масса: 1 кг упаковка</span>
                </div>

                <a href="#" class="price">14900р.</a>

              </div>

            </div>
          </div>
        </li>

        <li class="item-c">

          <div class="bod">
            <div class="box">

              <div class="slide-img">
                <img src="img/15.png" alt="3">
                <div class="overlay">
                  <a href="#" class="buy-btn">В КОРЗИНУ</a>
                </div>
              </div>

              <div class="detail-box">

                <div class="type">

                  <a href="#">ФОРЕЛЬ СТЕЙКИ ЗАМОРОЖЕННЫЕ</a>
                  <span>Цена за 900г.</span>
                </div>

                <a href="#" class="price">1690р.</a>

              </div>

            </div>
          </div>
        </li>

        <li class="item-d">

          <div class="bod">
            <div class="box">

              <div class="slide-img">
                <img src="img/12.png" alt="4">
                <div class="overlay">
                  <a href="#" class="buy-btn">В КОРЗИНУ</a>
                </div>
              </div>

              <div class="detail-box">

                <div class="type">

                  <a href="#">КАРАКАТИЦА ОЧИЩЕННАЯ МИНИ</a>
                  <span>Цена за 400г.</span>
                </div>

                <a href="#" class="price">765р.</a>

              </div>

            </div>
          </div>
        </li>

        <li class="item-f">

          <div class="bod">
            <div class="box">

              <div class="slide-img">
                <img src="img/13.png" alt="5">
                <div class="overlay">
                  <a href="#" class="buy-btn">В КОРЗИНУ</a>
                </div>
              </div>

              <div class="detail-box">

                <div class="type">

                  <a href="#">ТУНЕЦ ИСПАНСКИЙ БЛЮФИН О-ТОРО</a>
                  <span>Масса: 900г. упаковка</span>
                </div>

                <a href="#" class="price">23900р.</a>

              </div>

            </div>
          </div>
        </li>

        <li class="item-g">

          <div class="bod">
            <div class="box">

              <div class="slide-img">
                <img src="img/14.png" alt="6">
                <div class="overlay">
                  <a href="#" class="buy-btn">В КОРЗИНУ</a>
                </div>
              </div>

              <div class="detail-box">

                <div class="type">

                  <a href="#">СИБАС БЕЗ ГОЛОВЫ ЗАМОРОЖЕННЫЙ</a>
                  <span>Цена за 900г.</span>
                </div>

                <a href="#" class="price">900р.</a>

              </div>

            </div>
          </div>
        </li>

        <li class="item-h">

          <div class="bod">
            <div class="box">

              <div class="slide-img">
                <img src="img/18.png" alt="7">
                <div class="overlay">
                  <a href="#" class="buy-btn">В КОРЗИНУ</a>
                </div>
              </div>

              <div class="detail-box">

                <div class="type">

                  <a href="#">ОХЛАЖДЕННАЯ АКУЛА</a>
                  <span>Цена за 1 кг.</span>
                </div>

                <a href="#" class="price">2064р.</a>

              </div>

            </div>
          </div>
        </li>

      </ul>
    </div>
  </div>


  <div class="container">
    <div class="title">
      <h1>Морепродукты в интернет магазине «Dori»</h1>
    </div>

    <div class="subtitle">
      <p>Купить мороженые морские дары очень просто, достаточно зайти на сайт компании dori-msk.ru.
        Большой каталог обеспечит вас необходимым товаром.
        В нашем каталоге в ассортименте морские гребешки, мидии, крабы, кальмары, креветки самые различные
        - аргентинские, гребенчатые, северные, а также необычные морские коктейли. Продукция представлена по выгодной
        цене.
        Мы организуем доставку на дом.
      </p>
    </div>

  </div>


  <div class="black-block">
    <div class="container">

      <div class="block-holder">

      </div>
    </div>
  </div>

  <section class="section section-catalog">
    <div class="container">
      <header class="section_header">
        <h2 class="section_title">КАТАЛОГ</h2>
        <nav class="catalog-nav">
        <form action="#" method="post">
          <ul class="catalog-nav_wrapper">
            <li class="catalog-nav_item">
              <button class="catalog-nav_btn" type="button"><a href="" class="btn_cat"> Все </a></button>
            </li>

            <li class="catalog-nav_item">
              <button class="catalog-nav_btn" type="button"><a href="" class="btn_cat">Рыба</a></button>
            </li>

            <li class="catalog-nav_item">
              <button class="catalog-nav_btn" type="button"><a href="" class="btn_cat">Стейки</a></button>
            </li>

            <li class="catalog-nav_item">
              <button class="catalog-nav_btn" type="button"><a href="" class="btn_cat">Краб</a></button>
            </li>

            <li class="catalog-nav_item">
              <button class="catalog-nav_btn" type="button"><a href="" class="btn_cat">Икра</a></button>
            </li>

            <li class="catalog-nav_item">
              <button class="catalog-nav_btn" type="button"><a href="" class="btn_cat">Лобстер</a></button>
            </li>
          </ul>
          </form>
        </nav>
      </header>
  </section>

<?php //подключение файла с готовой пагинацией и всем остальным чтоб не путаться 
include('product.php'); ?>

  <div class="container">
    <div class="black">
    </div>

    <div class="logotip">
      <img class="lg" src="img/logo.png" alt="">
    </div>

    <p class="texts"> Морепродуктами называется все то, что можно добыть в толще вод моря или океана.
      Для тех, кто приступил к выбору морепродуктов, будет интересно побольше узнать об их пользе.
      Регулярная их поставка осуществляется со всей России и из-за границы, поэтому можно быть уверенным в наличии
      качественного товара.
      Замороженная продукция проходит тщательную проверку и контроль качества, после чего транспортируется вместе с
      соответствующей документацией и сертификатами.</p>



    <p class="texts">Покупательский спрос на свежемороженые морепродукты высок в любой сезон, так как они обеспечивают
      нас необходимыми ценнейшими элементами.
      Высоко их потребление в общественном питании - в ресторанах, кафе, барах в составе вкуснейших блюд и закусок к
      напиткам.
      Помимо того, что они обладают прекрасным вкусом, в них содержится большое количество микроэлементов и аминокислот.
    </p>

    <div class="black">

    </div>
  </div>

  <div class="container">
    <img class="osob" src="img/РЫБА.svg" alt="">

    <h1 class="os">ОСОБЕННОСТИ ПРИГОТОВЛЕНИЯ</h1>

    <p class="txt">Этот огромный выбор дает простор кулинарной фантазии.
      При правильном способе обработки морепродуктов они сохранят все полезные свойства и компоненты.
      Их можно не только употреблять сырыми, но и запекать, готовить на пару или обжаривать.</p>

  </div>


  <div class="container">
    <img class="crabs" src="img/Group 87.svg" alt="">
  </div>



 
    <div class="container">
      <div class="comment-first">
        <span>ОТЗЫВЫ</span>
      </div>
  

  <body>
    <div class="container2">
        <div class="block">
            <div class="content">
                <img src="" class="quote-img">
                <p> LOREM OEROIERIJFJSEiejfUFJEJ F
                    EJUFESHEFIYSEFIYHSE
                    YIFHISYEHFIYS
                    HFiusHEFIYHSF
                    IYHSEFIHSEIFHSEYHFKSEHFK
                    SEHFKSHEFKSEHFIhsef
                </p>
                <img src="1.jpg" class="face">
                <h3>David</h3>
            </div>
        </div>

        <div class="block">
            <div class="content">
                <img src="" class="quote-img">
                <p> LOREM OEROIERIJFJSEiejfUF
                    JEJFEJUFESHEFIYSEFIYHSEYIFHISYEH
                    FIYSHFiusHEFIYHSFIYHSE
                    FIHSEIFHSEY
                    HFKSEHFKSEHFKSHEFKSEHFIhsef
                </p>
                <img src="2.jpg" class="face">
                <h3>Ouven</h3>
            </div>
        </div>

        <div class="block">
            <div class="content">
                <img src="" class="quote-img">
                <p> LOREM OEROIERIJFJSEiejfUFJEJ F
                    EJUFESHEFIYSEFIYHSEYI
                    FHISYEHFIYS
                    HFiusHEFIYHSFIYHSEFIHSEIFHSEY
                    HFKSEHFK
                    SEHFKSHEFKSEHFIhsef
                </p>
                <img src="3.jpg" class="face">
                <h3>Mark</h3>
            </div>
        </div>

        <div class="block">
          <div class="content">
              <img src="" class="quote-img">
              <p> LOREM OEROIERIJFJSEiejfUF
                  JEJFEJUFESHEFIYSEFIYHSEYIFHISYEH
                  FIYSHFiusHEFIYHSFIYHSE
                  FIHSEIFHSEY
                  HFKSEHFKSEHFKSHEFKSEHFIhsef
              </p>
              <img src="2.jpg" class="face">
              <h3>Ouven</h3>
          </div>
      </div>
    </div>
  
  <div  id="КОНТАКТЫ" class="container map ">

    <iframe class="mapp" src="https://yandex.ru/map-widget/v1/?um=constructor%3A6a3ef5583fc61d85540d6b88128470ccdd637c32b05b563e60fb4e1870f86a2a&amp;source=constructor" frameborder="0">

    </iframe>
    <section class="contacts">
      <h3>« Dori » - РЫБА И МОРЕПРОДУКТЫ В МОСКВЕ</h3>
      <ul>
        <style>
          ul {
            list-style-type: none;
            /* Убирает буллиты */
          }
        </style>
        <li>ЗАКАЗ ПО ТЕЛЕФОНУ: <br>+7 (909) 699-71-11</li>
        <li>РАБОЧЕЕ ВРЕМЯ: <br>ПРИНИМАЕМ ЗАКАЗЫ 24/7 </li>
        <li>ДОСТАВКА ЗАКАЗОВ:<br> ПН-СБ с 09.00 до 22.00</li>
      </ul>
      <p>«Dori» Интернет-магазин рыбы и морепродуктов в Москве © 2022</p>
    </section>
  </div>

  <footer>

    <a href="#Home">О КОМПАНИИ</a>
    <a href="#Menu">ДОСТАВКА</a>
    <a href="index.html">ГЛАВНАЯ</a>
    <a href="#КОНТАКТЫ">КОНТАКТЫ</a>

    <div class="LOGO">
      <a href="index.html"><img class="grafic-logo" src="img/logo.png" alt=""></a>
    </div class="social">
      <a href="#"><img src="img/instagram.png" width="50px" alt=""></a>
      <a href="#"><img src="img/visa.png" width="50px" alt=""></a>
      <a href="#"><img src="img/telegram.png" width="50px" alt=""></a>
      <a href="#"><img src="img/vk.png" width="50px" alt=""></a>
    <div class="social">

    </div>
  </footer>

  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>