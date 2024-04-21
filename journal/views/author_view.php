<?php
echo '<h1 style="margin: 50px auto 50px; color: #352E7D;">Информация об авторе нашего сайта</h1>';
?>
<?php
	for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
		$data->data_seek($row_no);
		$row = $data->fetch_assoc();
		echo "<h6 style='margin: 20px;'>ID автора:</h6>
		<p style='margin: 20px;'>".$row['id']."</p>
		<h6 style='margin: 20px;'>ФИО автора:</h6>
		<p style='margin: 20px;'>".$row['fio']."</p>
		<h6 style='margin: 20px;'>Возраст автора:</h6>
		<p style='margin: 20px;'>".$row['age']."</p>
		<h6 style='margin: 20px;'>Местоположение:</h6>
		<p style='margin: 20px;'>".$row['location']."</p>
		<h6 style='margin: 20px;'>Дополнительно:</h6>
		<p style='margin: 20px;'>".$row['additional']."</p>
		<h6 style='margin: 20px;'>Описание:</h6>
		<p style='margin: 20px;'>".$row['description']."</p>";
	}
?>