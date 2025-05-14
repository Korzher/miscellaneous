<!DOCTYPE html>
<html>
<body>

<a href="?par1=1">Передать единицу</a><br>
<a href="?par1=2">Передать двойку</a><br>
<a href="?par1=3">Передать тройку</a><br>



<?php for ($i = 10; $i < 20; $i++) { ?>
    <a href="?par1=<?= $i?>">Передать <?= $i?></a><br>
<?php } ?>

<?php
    $arr = ['a', 'b', 'c', 'd', 'e']; 
    foreach ($arr as $elem) { ?>
    <a href="?par1=<?= $elem?>">Передать <?= $elem?></a><br>
<?php } ?>

<?php if(isset($_GET['par1'])) {
    echo $_GET['par1'];
}?>

</body>
</html>