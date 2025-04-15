<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha seu Time</title>
</head>
<body>
    <h1>Escolha seu Time de Futebol</h1>
    <form method="POST" action="">
        <label>
            <input type="radio" name="time" value="Palmeiras"> Palmeiras
        </label><br>
        <label>
            <input type="radio" name="time" value="Corinthians"> Corinthians
        </label><br>
        <label>
            <input type="radio" name="time" value="São Paulo"> São Paulo
        </label><br>
        <label>
            <input type="radio" name="time" value="Santos"> Santos
        </label><br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['time'])) {
        $timeEscolhido = $_POST['time'];

        $frases = [
            'Palmeiras' => [
                'Avante, Verdão!',
                'O campeão dos campeões!',
                'Palmeiras, minha vida é você!'
            ],
            'Corinthians' => [
                'Vai, Corinthians!',
                'Aqui é Corinthians!',
                'Todo poderoso Timão!'
            ],
            'São Paulo' => [
                'Vamos, Tricolor!',
                'O clube da fé!',
                'São Paulo, orgulho da nossa terra!'
            ],
            'Santos' => [
                'Vai pra cima deles, Santos!',
                'O peixe é tradição!',
                'Santos, o time dos meninos da vila!'
            ]
        ];

        if (array_key_exists($timeEscolhido, $frases)) {
            $fraseAleatoria = $frases[$timeEscolhido][array_rand($frases[$timeEscolhido])];
            echo "<p><strong>Time escolhido:</strong> $timeEscolhido</p>";
            echo "<p><strong>Mensagem de incentivo:</strong> $fraseAleatoria</p>";
        } else {
            echo "<p>Time inválido.</p>";
        }
    }
    ?>
</body>
</html>