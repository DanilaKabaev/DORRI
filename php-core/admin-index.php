<?php 
session_start();
?>
<?php 
//проверка на админа
if (!empty($_SESSION['admin'])): ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>администраторская панель</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="../css/lightslider.css">
  <script type="text/Javascript" src="../js/JQuery.js"></script>
  <script type="text/Javascript" src="../js/lightslider.js"></script>
</head>

<body>
  <div class="header">
    <img class="cc" src="../img/Group 110.svg" alt="">
      <div class="nav">
        <p class="nav-item">Добро пожаловать, admin</p>
        <p class="nav-item">Панель администрирования</p>
      <div class="prof">
        <a style="margin-left: 430%;" class="nav-item" href="logout.php">
          ВЫХОД
        </a>
      </div>
    </div>
  </div>
  <div style="margin-top: 250px; margin-left: 30%;">
  <a href="save.php" class="service-button">ДОБАВЛЕНИЕ НОВОГО ТОВАРА</a>
  <a href="view.php" class="service-button">УДАЛЕНИЕ ТОВАРА</a>
  <a href="../index.php" class="service-button">ПРОСМОТР САЙТА</a>
  </div>
  

  <script type="text/javascript" src="../js/script.js"></script>
</body>

</html>
<?php else: ?>
  <h4>Ошибка!</h4>
  <?php endif;?>