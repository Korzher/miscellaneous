<!DOCTYPE html>
<html>
<body>

<h3>Выберите страну проживания</h3>
<form action="" method="GET">
    <select name="country">
        <option <?php
			if (!empty($_GET['country']) and $_GET['country'] === 'Россия') {
				echo 'selected';
			}
		?>>Россия</option>
        <option <?php
			if (!empty($_GET['country']) and $_GET['country'] === 'Сиродил') {
				echo 'selected';
			}
		?>>Сиродил</option>
        <option <?php
			if (!empty($_GET['country']) and $_GET['country'] === 'Люмьер') {
				echo 'selected';
			}
		?>>Люмьер</option>
        <option <?php
			if (!empty($_GET['country']) and $_GET['country'] === 'Гора Холли') {
				echo 'selected';
			}
		?>>Гора Холли</option>
    </select>
    <input type="submit">
</form>

<h3>Выберите язык</h3>
<form action="" method="GET">
    <select name="lang">
        <option value="1" <?php
			if (!empty($_GET['lang']) and $_GET['lang'] === '1') {
				echo 'selected';
			}
		?>>Русский</option>
        <option value="2" <?php
			if (!empty($_GET['lang']) and $_GET['lang'] === '2') {
				echo 'selected';
			}
		?>>Имперский</option>
        <option value="3" <?php
			if (!empty($_GET['lang']) and $_GET['lang'] === '3') {
				echo 'selected';
			}
		?>>Флориография</option>
        <option value="4" <?php
			if (!empty($_GET['lang']) and $_GET['lang'] === '4') {
				echo 'selected';
			}
		?>>Криптография</option>
    </select>
    <input type="submit">
</form>

</body>
</html>