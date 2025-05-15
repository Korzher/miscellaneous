<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    echo file_get_contents('file.txt');
    $sum = file_get_contents('1.txt') + file_get_contents('2.txt');
    echo $sum;
    file_put_contents('sum.txt', $sum);
    echo $_SERVER['DOCUMENT_ROOT'];
    rename('old.txt', 'new.txt');
    ?>

</body>
</html>