<?php
	session_start();

    if (!isset($_COOKIE['time'])) {
		setcookie('time', time(), time() + 60 * 60 * 24);
		$cTime = 0;
	} else {
		$cTime = time() - $_COOKIE['time'];
	}

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
        echo "Вы провели на странице $cTime секунд <br>";
	    echo "Вы провели на странице $time секунд <br>";
    ?>  
    <form>
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="surname" placeholder="Фамилия">
        <input type="number" name="age" placeholder="Возраст">
        <input type="text" name="movie" placeholder="Твой любимый фильм?">
        <input type="text" name="song" placeholder="Твоя любимая песня?">
        <input type="submit" value="Отправить">
    </form>

    <?php 	if (!empty($_GET)) {
		$_SESSION['data'] = $_GET;
	}

    var_dump($_COOKIE['str']);
    ?>

    <a link href="http://localhost/session_result.php">Перейти к результату</a>
</body>
</html>