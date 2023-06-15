<?php
session_start();
?>
<?php //благодаря этой строчке только админ может видеть эту страничку
if (!empty($_SESSION['admin'])): ?>
<html>
    <head>  <link rel="stylesheet" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="../css/lightslider.css">
  <script type="text/Javascript" src="../js/JQuery.js"></script>
  <script type="text/Javascript" src="../js/lightslider.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Удалить товар</title>
    </head>
<body>
<div class="header">
    <img class="cc" src="../img/Group 110.svg" alt="" >
      <div class="nav">
        <p class="nav-item">Добро пожаловать, admin</p>
        <p class="nav-item">Панель администрирования</p>
        <a class="nav-item" href="logout.php">Выход</a>
    </div>
  </div>
  <?php
    include('bd.php');
    // функция удаления по айди
    if (isset($_GET['del'])) {
      $del = $_GET['del'];
      $query = "DELETE FROM product WHERE id=$del";
      mysqli_query($link, $query);
      }
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else { 
        $page = 1;
    }
    $size_page = 18;
    $offset = ($page-1) * $size_page;

    $count_sql = "SELECT COUNT(*) FROM product";
    $result = mysqli_query($link, $count_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $size_page);

    $sql = "SELECT * FROM product LIMIT $offset, $size_page";
    $res_data = mysqli_query($link, $sql);
    // Цикл для вывода строк
    echo '<div class="blackfon1" style="margin-top: 250px;"><div class="container_service"><div class="columns">';
    while($row = mysqli_fetch_array($res_data)){
        echo '<div class="service-card">';
        echo '<a href="?del=' . $row['id'] . '">удалить</a>';
        $image_name=$row["image_name"];
        $image_path=$row["image_path"];
       echo "<img src=". $image_path . $image_name . ">";
       echo '<h3 class="h-tri">'. $row['name'] . '</h3> <p class="service-description">';
       echo $row['weight'] . '</p><span class="service-cost">';
       echo $row['price'] . '</div>';
    }
    echo '</div></div></div>';
    // Закрываем соединение с БД
    mysqli_close($link);

?>
<a href="admin-index.php" class="service-button">НАЗАД</a></div>
  <?php else: ?>
  <h4>Ошибка!</h4>
  <?php endif;?>