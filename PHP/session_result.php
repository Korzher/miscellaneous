<!DOCTYPE html>
<html>
<body>

<?php
    session_start();
    if (!empty($_SESSION)) {
    echo($_SESSION['name'] . " " . $_SESSION['surname'] . ", " . $_SESSION['age'] . "<br>");
    }

    $data = $_SESSION['data'];

    echo $_COOKIE['work']; 
?>
    <ul>
<?php
    foreach ($data as $elem) {
        echo "<li>$elem</li>";
    }
?>
    </ul>

</body>
</html>