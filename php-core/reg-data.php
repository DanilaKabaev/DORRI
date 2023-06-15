<?php
include('bd.php');
$url = "../index.php";
$url2 = "../forms.php";
//проверка на пустые/заполненные данные в форме
if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['username'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    //запрос к бд
    $query = "SELECT * FROM user WHERE email='$email'";
    $user = mysqli_fetch_assoc(mysqli_query($link, $query));
    if (empty($user)) {
        $query = "INSERT INTO user SET email='$email', password='$password', username='$username'";
        mysqli_query($link, $query);
        //открытие сессии авторизации сразу после регистрации
        $_SESSION['auth'] = true;
        header('Location: '.$url);
        }
    else {
        echo 'Такой e-mail уже используется';
    }
    }