<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
</head>
<body>
    <h1>Gerador de Números Aleatórios</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Gerar Número Aleatório</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = intval($_POST['numero']);
        if ($numero > 0) {
            $aleatorio = rand(0, $numero);
            echo "<p>Número aleatório gerado: <strong>$aleatorio</strong></p>";
        } else {
            echo "<p>Por favor, insira um número maior que zero.</p>";
        }
    }
    ?>
</body>
</html>