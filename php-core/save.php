<?php
session_start();
?>
<?php if (!empty($_SESSION['admin'])): ?>
<html>
    <head>  <link rel="stylesheet" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="../css/lightslider.css">
  <script type="text/Javascript" src="../js/JQuery.js"></script>
  <script type="text/Javascript" src="../js/lightslider.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Добавить товар</title>
    </head>
<body>
<div class="header">
    <img class="cc" src="../img/Group 110.svg" alt="">
      <div class="nav">
        <p class="nav-item">Добро пожаловать, admin</p>
        <p class="nav-item">Панель администрирования</p>
        <a class="nav-item" href="logout.php">Выход</a>
    </div>
  </div>
    <div class="container" style="margin-top: 250px">
    <div class="card">
    <div class="card-header">
        <h4>Добавить товар</h4>
    </div>
    <div class="card-body">
        <form method="post" action="save-data.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6"><input type="text" size="20" placeholder="название товара" name="name" class="form-control" style="margin-bottom: 30px;">
                    <input type="text" size="20" placeholder="описание" name="description" class="form-control" style="margin-bottom: 30px;">
                    <input type="text" size="20" placeholder="состав" name="content" class="form-control" style="margin-bottom: 30px;">
                    <input type="text" size="20" placeholder="вес" name="weight" class="form-control" style="margin-bottom: 30px;">
                    <input type="text" size="20" placeholder="способ доставки" name="delivery" class="form-control" style="margin-bottom: 30px;">
                    <input type="text" size="20" placeholder="способ упаковки" name="pack" class="form-control" style="margin-bottom: 30px;"></div>

                <div class="col-6"><input type="text" size="20" placeholder="условия хранения" name="keeping" class="form-control" style="margin-bottom: 30px;">
                    <input type="text" size="20" placeholder="энергетическая ценность" name="nut_value" class="form-control" style="margin-bottom: 30px;">
                    <input type="text" size="20" placeholder="заметка" name="note" class="form-control" style="margin-bottom: 30px;">
                    <input type="text" size="20" placeholder="цена" name="price" class="form-control" style="margin-bottom: 30px;">
                    <select id="category_id" name="category_id" class="form-select">
                                <option value="1">рыба</option>
                                <option value="2">стейки</option>
                                <option value="3">краб</option>
                                <option value="4">лобстер</option>
                                <option value="5">икра</option>
                                <option value="6">осьминоги</option>
                        </select>
                        <input type="file" name="image" />
                        <input type="submit" class="service-button" value="Отправить"></div></div>
        </form>
    </div>
    </div>
    <a href="admin-index.php" class="service-button">НАЗАД</a></div>
</body>
</html>
<?php else: ?>
  <h4>Ошибка!</h4>
  <?php endif;?>