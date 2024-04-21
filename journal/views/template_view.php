<?php
	if ($_SERVER['REQUEST_URI'] == '/journal/about') {
		$title = 'Об авторах';
	} else if ($_SERVER['REQUEST_URI'] == '/journal/about/author/?id=1') {
		$title = 'Сивинский С.А.';
	} else if ($_SERVER['REQUEST_URI'] == '/journal/about/author/?id=2') {
		$title = 'Иванов И.И.';
	} else if ($_SERVER['REQUEST_URI'] == '/journal/about/author/?id=3') {
		$title = 'Петров П.П.';
	} else if ($_SERVER['REQUEST_URI'] == '/journal/feedback') {
		$title = 'Обратная связь';
	} else if ($_SERVER['REQUEST_URI'] == '/journal/404') {
		$title = 'Ошибка';
	} else {
		$title = 'Главная';
	}
	include_once 'files/header.php';
?>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php include 'views/'.$content_view; ?>
			</div>
		</div>
	</div>

<?php
	include_once 'files/footer.php';
?>