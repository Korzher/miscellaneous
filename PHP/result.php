<!DOCTYPE html>
<html>
<body>

<h3>Результаты:</h3>
<?php if (isset($_GET['number1'])) { ?>
<p>GET-данные: <?php 
    if (isset($_GET['number1']) && isset($_GET['number2'])) {
    echo $_GET['number1'] + $_GET['number2'];
    } else {
    echo '0';
    } ?></p>
<?php } ?>

<?php if (isset($_POST['number1'])) { ?>
    <p>POST-данные: <?php 
    if (isset($_POST['number1']) && isset($_POST['number2'])) {
    echo $_POST['number1'] - $_POST['number2'] ;
     } else {
    echo '0';
    } ?></p>
    <?php } ?>

    <?php if(isset($_POST['name'])) { ?>
    <?php $pass = "12345"?>
    <p> Имя пользователя: <?= $_POST['name'] ?></p> <br>
    <p> Возраст пользователя: <?= $_POST['age'] ?></p> <br>
    <p> Дата рождения пользователя: <?= $_POST['DofB'] . "." . $_POST['MofB'] . "." . $_POST['YofB']?></p> <br>
    <p> День недели, когда родился пользователь: <?php
        $date = $_POST['YofB'] . "-" . $_POST['MofB'] . "-" . $_POST['DofB'];
        echo date('l', strtotime($date));
     ?></p> <br>
    <p> Пароль совпадает: <?php 
        if($pass === $_POST['pass']) {
            echo 'true';
        } else {
            echo 'false';
        }?></p>
    <?php } ?>



</body>
</html>