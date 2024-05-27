<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada do número <?php echo isset($_POST['numero']) ? $_POST['numero'] : ''; ?></h1>
    <?php
    if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);

        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum número foi fornecido.</p>";
    }
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>
