<!DOCTYPE html><!--Начальный файл-->
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="default.css" type="text/css"/>
    <title>Демократы</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="kpSS6OP0QNo.jpg"> <!-- значок в браузере на вкладке--> 
</head>
<body style="background: #006a8f">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
include_once './header.php';// включит файл только один раз!
include_once './config.php';
?>

<h2>Новости</h2>
<table border='3' bordercolor="black" width='100%' style="background: #378bc2">	
    <?php

    $result = mysqli_query($link, "select * from news");//Обрабатываемый результат запрос, выбрать всё из news
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {//Выбирает одну строку из результирующего набора и помещает ее в ассоциативный массив и так весь контект
        echo "<tr><td align='center'>" . $row[1] . "</td> <td align='center'>" . $row[2] . "</td></tr>";
    }
    ?>
</table>
</body>
</html>
