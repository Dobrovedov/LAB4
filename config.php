<?php
$host = "localhost";
$user = "o91119v1_123";
$pass = "123456";
$database = "o91119v1_123";
$link = mysqli_connect($host, $user, $pass); // ссылка на подключение 
if (!$link)//если фолс
    die("Подключение провалено");
$db = mysqli_select_db($link, $database);// Устанавливает базу данных, которая будет использоваться при выполнении запросов к базе данных
if (!$db)//если фолс
    die("С базой данных проблемки");