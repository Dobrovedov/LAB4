<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <title></title>
</head>
<body>
<hr>
<div class="container m-auto text-md-center" >
     		<h3>Добавить новость</h3>
			<form method="post"><!--Метод post посылает на сервер данные в запросе браузера--> 
			    Шапка: <input type="text"  style="background: #fff8fd" name="title"><br>
			    Текст: <p><textarea rows="10" cols="100"  style="background: #fff8fd"  name="text"></textarea></p>
			    <input type="submit"> <!--Кнопка для отправки данных формы на сервер.--> 
			</form>
			<?php
			$title = $_POST["title"];//вытаскивает значение в ячейках
			$body = $_POST["text"];//
			if ($title != '' && $body != '') {// если значение не пустое
			    $sql = "INSERT INTO news (title, body) VALUES ('$title', '$body')";// вставить в таблицу стаолбцы '' значние '' 
			}
			if (mysqli_query($link, $sql)) {
			    echo "Данные успешно добавлены";
			}
			else echo "Данные удалены";
			?>
</div>
</body>
</html>