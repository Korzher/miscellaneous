<!DOCTYPE html>
<html>
<body>

<p>Введите ваше имя</p>
<?php
	if (empty($_GET)) {
?>
	<form action="" method="GET">
		<input name="name">
		<input type="submit">
	</form>
<?php
	} else {
		echo "Приветствую, " . $_GET['name'];
	}
?>

<h3>GET-форма:</h3>
<p>Направьте числа для сложения</p>
<form action="/result.php" method="GET">
	<input name="number1">
	<input name="number2">
	<input type="submit">
</form>

<h3>POST-форма:</h3>
<p>Направьте числа для вычитания</p>
<form action="/result.php" method="POST">
	<input name="number1">
	<input name="number2">
	<input type="submit">
</form>

<h3>POST-форма информация о пользователе </h3>

<form action="/result.php" method="POST">
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="age" placeholder="age"><br>
    <input type="password" name="pass" placeholder="password"><br>
    <input type="text" name="YofB" placeholder="Year of Birth"><br>
    <input type="text" name="MofB" placeholder="Month of Birth"><br>
    <input type="text" name="DofB" placeholder="Day of Birth"><br>
    <input type="submit">
</form>

</body>
</html>