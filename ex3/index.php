<?php
// Vetores com frases para homem e mulher
$frasesHomem = [
    "A coragem é a primeira das qualidades humanas.",
    "O sucesso é a soma de pequenos esforços repetidos dia após dia.",
    "A persistência é o caminho do êxito."
];

$frasesMulher = [
    "A força de uma mulher é incomparável.",
    "Seja a mudança que você deseja ver no mundo.",
    "Acredite no seu poder e conquiste o impossível."
];

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $genero = $_POST['genero'];

    if ($genero === 'homem') {
        $sorte = $frasesHomem[array_rand($frasesHomem)];
    } elseif ($genero === 'mulher') {
        $sorte = $frasesMulher[array_rand($frasesMulher)];
    } else {
        $sorte = "Escolha inválida.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frase do Dia</title>
</head>
<body>
    <h1>Escolha seu gênero e descubra sua frase!</h1>
    <form method="POST">
        <label>
            <input type="radio" name="genero" value="homem" required> Homem
        </label>
        <label>
            <input type="radio" name="genero" value="mulher" required> Mulher
        </label>
        <br><br>
        <button type="submit">Ver minha frase</button>
    </form>

    <?php if (isset($sorte)): ?>
        <h2>Sua sorte: <?= htmlspecialchars($sorte) ?></h2>
    <?php endif; ?>
</body>
</html>