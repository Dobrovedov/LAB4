<!DOCTYPE html><!--Начальный файл-->
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="default.css" type="text/css"/>
    <title></title>
</head>
<body>

<?php
include_once './header.php';// включит файл только один раз!
include_once './config.php';
?>

<h2>Новости</h2>
<table border='2' width='100%'>
    <?php

    $result = mysqli_query($link, "select * from news");//Обрабатываемый результат запрос, выбрать всё из news
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {//Выбирает одну строку из результирующего набора и помещает ее в ассоциативный массив и так весь контект
        echo "<tr><td align='center'>" . $row[1] . "</td> <td align='center'>" . $row[2] . "</td></tr>";
    }
    ?>
</table>
</body>
</html>
