<?php
// Conecte-se ao banco de dados
$conn = new mysqli('127.0.0.1', 'root', '', 'skate');

// Verifique a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Receba os dados do pedido do POST
$data = json_decode(file_get_contents("php://input"), true);
$cliente_email = $data['cliente_email'];
$pedidos = $data['pedidos'];

// Prepare e execute a consulta SQL para inserir cada pedido na tabela pedidos
foreach ($pedidos as $pedido) {
    $produto = $pedido['nome'];
    $preco = $pedido['preco'];

    $sql = "INSERT INTO pedidos (email, produto, preco) VALUES ('$cliente_email', '$produto', '$preco')";
    if ($conn->query($sql) !== TRUE) {
        echo "Erro ao inserir pedido: " . $conn->error;
        $conn->close();
        exit(); // Encerra a execução do script em caso de erro
    }
}

// Se chegou até aqui, significa que todos os pedidos foram inseridos com sucesso
echo "Pedidos inseridos com sucesso.";

// Feche a conexão com o banco de dados
$conn->close();
?>