<!DOCTYPE html>
<html>
<body>

<form action="" method="GET">
    <h3>Введите градусы Цельсия для перевода в градусы Фаренгейта</h3>
    <input type="text" name="temp"></input><br>
    <input type="submit"></input>
</form>

<form action="" method="GET">
    <h3>Введите число для поиска факториала</h3>
    <input type="text" name="fact"></input><br>
    <input type="submit"></input>
</form>

<form action="" method="GET">
    <h3>Список делителей</h3>
    <input type="text" name="delim"></input><br>
    <input type="submit"></input>
</form>

<form action="" method="GET">
    <h3>Список делителей двух чисел</h3>
    <input type="text" name="delim_double_1"></input><br>
    <input type="text" name="delim_double_2"></input><br>
    <input type="submit"></input>
</form>

<h3>Результат</h3>
<?php if (isset($_GET['temp'])) {
    echo $_GET['temp'] * 1.8 + 32;
} ?>
<?php if (isset($_GET['fact'])) {
    $res = 1;
    for ($i = $_GET['fact']; $i >= 1; $i--) {
        $res *= $i;
    }
    echo $res;
} ?>
<?php if (isset($_GET['delim'])) {
    $num = $_GET['delim'];
    $i = 2;
    $arr = [];
    while($num !== 1) {
        if ($num % $i == 0) {
            $num = $num / $i;
            $arr[] = $i;
        } else {
            $i++;
        }
    }
    foreach($arr as $elem) {
        echo $elem . " ";
    }
} ?>

<?php if (isset($_GET['delim_double_1'])) {
    $num1 = $_GET['delim_double_1'];
    $num2 = $_GET['delim_double_2'];
    $i = 2;
    $arr = [];
    while($num1 !== 1) {
        if ($num1 % $i == 0) {
            if($num2 % $i == 0) {
            $arr[] = $i;
            }
            $num1 = $num1 / $i;
        } else {
            $i++;
        }
    }
    foreach($arr as $elem) {
        echo $elem . " ";
    }
} ?>


</body>
</html>