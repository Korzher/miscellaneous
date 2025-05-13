<!DOCTYPE html>
<html>
<body>

<h3>Результаты:</h3>
<p>GET-данные: <?= htmlspecialchars($_GET['get_data'] ?? '') ?></p>
<p>POST-данные: <?= htmlspecialchars($_POST['post_data'] ?? '') ?></p>

</body>
</html>