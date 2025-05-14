<!DOCTYPE html>
<html>
<body>

<form action="" method="GET">
	<input type="hidden" name="flag_1" value="0">
    <input type="hidden" name="flag_2" value="0">
    <input type="hidden" name="flag_3" value="0">
	<input
		type="checkbox"
        value="1"
		name="flag_1"
         <?php
			if (isset($_GET['flag_1']) and $_GET['flag_1'] === '1')
				echo 'checked';
			?>
		>
    <input
		type="checkbox"
		name="flag_2"
		value="1"
		<?php if (!empty($_GET['flag_2'])) echo 'checked' ?>
	>
    <input
		type="checkbox"
		name="flag_3"
		value="1"
		<?php if (!empty($_GET['flag_3'])) echo 'checked' ?>
	>
	<input type="submit">
</body>
</html>