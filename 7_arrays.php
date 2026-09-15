<?php
// Array associativo (Contendo informações de produtos)
$produtos = [
    ["nome" => "Camiseta", "preco" => 50.00, "quantidade" => 10 , "marca" => "nike", "Cor" => "Amarelo"],
    ["nome" => "Calça Jeans", "preco" => 200.00, "quantidade" => 15 , "marca" => "lacoste", "Cor" => "Azul"],
    ["nome" => "Tênis", "preco" => 300.00, "quantidade" => 12 , "marca" => "Adidas", "Cor" => "Branco"],
    ["nome" => "Carteira", "preco" => 80.00, "quantidade" => 7 , "marca" => "vivara", "Cor" => "Marrom"],
    ["nome" => "Cinto", "preco" => 65.00, "quantidade" => 13 , "marca" => "Lacoste", "Cor" => "Preto"],
];

// Exibir os dados em tabela
echo "<table border='1'>";
echo "<caption><h2>Lista de Produtos</h2></caption>";
echo "<tr><th>Nome</th><th>Preço</th><th>Quantidade</th><th>Marca</th><th>Cor</th></tr>";

foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>" . $produto['nome'] . "</td>";
    echo "<td>R$ " . number_format($produto['preco'], 2, ',' , '.') . "</td>";
    echo "<td>" . $produto['quantidade'] . "</td>";
    echo "<td>" . $produto['marca'] . "</td>";
    echo "<td>" . $produto['Cor'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>