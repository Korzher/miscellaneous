<!DOCTYPE html>
<html>
<body>

<h3>Результаты:</h3>
<p>GET-данные: <?php 
    if (isset($_GET['number1']) && isset($_GET['number2'])) {
    echo $_GET['number1'] + $_GET['number2'];
    } else {
    echo '0';
    } ?></p>
<p>POST-данные: <?php 
    if (isset($_POST['number1']) && isset($_POST['number2'])) {
    echo $_POST['number1'] - $_POST['number2'] ;
     } else {
    echo '0';
    } ?></p>
</body>
</html>