<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $randNumber = rand(0, 99);
} else {
    $randNumber = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
</head>
<body>
    <h1>Gerador de Número Aleatório</h1>
    <form method="post">
        <button type="submit">Gerar Número</button>
    </form>
    <?php if ($randNumber !== null): ?>
        <p>Número gerado: <strong><?php echo $randNumber; ?></strong></p>
    <?php endif; ?>
</body>
</html>