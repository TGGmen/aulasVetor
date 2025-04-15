<?php
// Array de cores e frases características
$cores = [
    "Azul" => "O azul transmite tranquilidade e serenidade.",
    "Vermelho" => "O vermelho simboliza paixão e energia.",
    "Verde" => "O verde representa esperança e natureza.",
    "Amarelo" => "O amarelo é a cor da alegria e otimismo.",
    "Roxo" => "O roxo está associado à criatividade e mistério."
];

// Sorteia uma cor aleatória
$corSorteada = array_rand($cores);

// Exibe a cor sorteada e sua frase característica
echo "<h1>Cor Sorteada: $corSorteada</h1>";
echo "<p>{$cores[$corSorteada]}</p>";
echo "<h2>Cores Disponíveis:</h2><ul>";
foreach ($cores as $cor => $frase) {
    echo "<li>$cor</li>";
}
echo "</ul>";

// Botão para sortear novamente
echo '<form method="post">';
echo '<button type="submit">Sortear Novamente</button>';
echo '</form>';
?>
