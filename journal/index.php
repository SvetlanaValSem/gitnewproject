<?php

/*
$mysqli = mysqli_connect("db", "root", "mypassword", "POSTS");
if ($mysqli === false) {
	die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
	$res = $mysqli->query("SELECT * FROM last_news");
	echo "<table>";
	echo "<tr><th>ID</th><th>Title</th><th>Conten</th><th>Postcard</th></tr>";
	for ($row_no = 0; $row_no <= $res->num_rows - 1; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<tr><td>".$row['id_news']."</td><td>".$row['title']."</td><td>".$row['content']."</td><td><img src='".$row['postcard']."' width='150'/></td></tr>";
	}
	echo "</table>";
	mysqli_close($mysqli);
}
*/

//Подключаем все наши общие классы: Модель, Контроллер и Представление
require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/Controller.php';
//Подключаем также Роутинг и запускаем его маршрутизатор
require_once 'core/Route.php';
Route::start(); // запускаем маршрутизатор

?>