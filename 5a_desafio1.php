<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $idade = date("Y") - $_POST["ano_nascimento"];

    if ($idade >= 18) {
        $mensagem = "Acesso permitido, $nome!";
        file_put_contents("log_acessos.txt", "$nome - $idade anos\n", FILE_APPEND);
    } else {
        $mensagem = "Acesso negado, $nome!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Maioridade</title>
</head> 
<body>
    <h1>Verificador de Maioridade</h1>

    <form method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        Ano de Nascimento: <input type="number" name="ano_nascimento" required><br><br>
        <button type="submit">Verificar</button>
    </form>

    <p><?php echo $mensagem; ?></p>
</body>
</html>