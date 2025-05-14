<!DOCTYPE html>
<html>
<body>

<?php
	session_start();
	echo $_SESSION['numOne'] + $_SESSION['numTwo'];
?>

</body>
</html>