<!DOCTYPE html>
<html>
<body>

<h3>Вам уже есть 18 лет?</h3>
<?php if(empty($_GET)) {?>
<form action="" method="GET">
    <input type="hidden" name="flag" value="0">
    <input type="checkbox" name="flag" value="1">
    <input type="submit">
</form>
<?php } else {
        if ($_GET['flag'] === "0") {
            echo "Доступ на сайт запрещен!";
        } else {
            echo "Доступ на сайт разрешен!";
        }
    }
?>

</body>
</html>