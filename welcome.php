<?php
session_start();

// Verifique se o usuário está logado, caso contrário, redirecione para a página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    echo "retornar";
    // header("Location: index.html");
    exit;
}
// Exemplo de nomes aleatórios
$nomes = ["João", "Maria", "Pedro", "Ana", "Lucas", "Julia", "Roberto", "Fernanda", "Carlos", "Leticia"];

// Função para gerar cor aleatória (verde ou vermelho)
function gerarCor() {
    $cores = ["green", "red"];
    return $cores[array_rand($cores)];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Boas-vindas</title>
</head>
<body>
    <h1>Bem-vindo ao painel!</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nomes as $nome): ?>
            <tr>
                <td><?php echo $nome; ?></td>
                <td style="color: <?php echo gerarCor(); ?>;"><?php echo gerarCor(); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
