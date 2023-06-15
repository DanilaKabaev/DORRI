<?php
//скрипт авторизации
include('bd.php');
$url = '../index.php';
$admin_url = 'admin-index.php';
session_start();
if (!empty($_POST['password']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);
    if (!empty($user)) {
        $_SESSION['auth'] = true;
        $id = mysqli_insert_id($link);
        $_SESSION['id'] = $id;
        //получение юзернейма в сессию
        $_SESSION['username'] = $user['username'];
        header('Location: ' . $url);
        //обозначение юзера-админа и открытие админской сессии; открытие панели администратора для него же
        // в базе данных уже есть готовый админ с юзернеймом админ, под ним и авторизовываться для работы
        if ($user['username'] == 'admin') {
            $_SESSION['admin'] = true;
            header('Location: ' . $admin_url);
        }
    } else {
    echo 'Вы неверно ввели логин или пароль';
    }
    }