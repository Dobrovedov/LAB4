<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h3>Удалить новость</h3>
<table border='1' width='100%'>
    <thead>
    <tr>
        <th>Id</th>
        <th>Заглавие</th>
        <th>Текст</th>
        <th>Удаление</th>
    </tr>
    </thead>
    <tbody>

    <?php $result = mysqli_query($link, "select * from news");
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) ://Выбирает одну строку из результирующего набора и помещает ее в ассоциативный массив и так весь контект
        ?>

    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $row[0]; ?>"><!-- id данной строки -->
                <input type="submit" name="submit" value="Удалить">
            </form>
        </td>
    </tr>

    <?php endwhile; //закрываем цикл
    $id = $_POST['id'];
    $query = "DELETE FROM news WHERE id = $id";//sql удалить все из таблицы пол этим id
    mysqli_query($link, $query);// запрос на серевер
    ?>
    </tbody>
</table>
</body>
</html>