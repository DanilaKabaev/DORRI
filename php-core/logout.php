<?php
//скрипт выхода из учетки с последующей смертью сессии, чтоб корректно работало
$url = '../index.php';
session_start();
$_SESSION['auth'] = null;
header('Location: ' . $url);
session_destroy();
?>