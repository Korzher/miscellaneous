<!DOCTYPE html>
<html>
<body>

<?php
    session_start();
    if (!empty($_SESSION)) {
    echo($_SESSION['name'] . " " . $_SESSION['surname'] . ", " . $_SESSION['age']);
    }
?>

</body>
</html>