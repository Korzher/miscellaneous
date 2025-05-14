<!DOCTYPE html>
<html>
<body>

    <form action="" method="GET">
    <p>Укажите ваш пол</p>
	<input type="radio"  name="radio" value="1" checked><p>Мужской</p><br>
	<input type="radio"  name="radio" value="2"><p>Женский</p><br>
	<input type="radio"  name="radio" value="3"><p>Предпочитаю скрыть</p><br>
	<input type="submit">
    </form>
    <?php if(isset($_GET['radio'])) {
    if($_GET['radio'] === "1") {
        echo "Ваш пол - мужской";
    } else if($_GET['radio'] === "2") {
        echo "Ваш пол - женский";
    } else if($_GET['radio'] === "3"){
        echo "Ваш пол - скрыт";
    }}?>
</form>

<form action="" method="GET">
    <input type="hidden" name="lang" value="0">
	<input type="radio" name="lang" value="1" <?php
		if (!empty($_GET['lang']) and $_GET['lang'] === '1') {
			echo "checked";
		}
	?>><p>Русский</p><br>
	<input type="radio" name="lang" value="2" <?php
		if (!empty($_GET['lang']) and $_GET['lang'] === '2') {
			echo 'checked';
		}
	?>><p>Английский</p><br>
	<input type="radio" name="lang" value="3" <?php
		if (!empty($_GET['lang']) and $_GET['lang'] === '3') {
			echo 'checked';
		}
	?>><p>Эльфийский</p><br>
	<input type="submit">
</form>

</body>
</html>