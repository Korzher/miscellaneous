<?php
	session_start();

    if (!isset($_SESSION['time'])) {
		$_SESSION['time'] = time();
        $time = 0;
	} else {
		$time = time() - $_SESSION['time'];
	}

    	if (!empty($_GET)) {
		$_SESSION['name'] = $_GET['name'];
		$_SESSION['surname'] = $_GET['surname'];
        $_SESSION['age'] = $_GET['age'];
	}
?>

<!DOCTYPE html>
<html>
<body>
    <?php
	    echo "Вы провели на странице $time секунд";
    ?>  
    <form>
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="surname" placeholder="Фамилия">
        <input type="number" name="age" placeholder="Возраст">
        <input type="submit" value="Отправить">
    </form>

    <a link href="http://localhost/session_result.php">Перейти к результату</a>
</body>
</html>