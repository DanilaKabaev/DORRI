<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <div class="header">
        <img class="cc" src="img/Group 110.svg" alt="">
          <div class="nav">
            <a class="nav-item" href="about us.html">О КОМПАНИИ</a>
            <a class="nav-item" href="#">ДОСТАВКА</a>
            <a class="nav-item" href="">КОНТАКТЫ</a>
            <a class="nav-item" href="index.php">ГЛАВНАЯ</a>
            <button class="btnLogin-popup"><ion-icon name="person-circle"></ion-icon></button>
        </div>
      </div>

      <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Вход</h2>
            <form action="php-core/auth.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Пароль</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Запомнить меня</label>
                </div>
                <input type="submit" class="btn" value="Войти">
                <div class="login-register">
                    <p>Нет аккаунта?<a href="#" class="register-link">Зарегистрировать</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Регистрация</h2>
            <form action="php-core/reg-data.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" name="username" required>
                    <label>Имя пользователя</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Пароль</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Принимаю пользовательское соглашение</label>
                </div>
                <input type="submit" class="btn" value="Зарегистрироваться">
                <div class="login-register">
                    <p>Уже есть аккаунт?<a href="#" class="login-link">Войти</a></p>
                </div>
            </form>
        </div>

      </div>

    <script src="js/forms.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>