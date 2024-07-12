<?php
session_start(); // Inicia a sessão (se já não estiver iniciada)

// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    // Verifica se o e-mail ou senha estão em branco
    if(empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
        exit(); // Encerra o script
    }
    
    // Conecta-se ao banco de dados
    $servername = "127.0.0.1"; // Nome do servidor MySQL
    $username = "root"; // Nome de usuário MySQL
    $password = ""; // Senha do MySQL
    $dbname = "techinova"; // Nome do banco de dados

    // Cria uma conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Consulta SQL para verificar as credenciais de login
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    // Verifica se há resultados e se há apenas um registro retornado
    if ($result->num_rows == 1) {
        // Login bem-sucedido
        $_SESSION["loggedin"] = true;
        
        // Redireciona o usuário para a página carrinho.php com mensagem de boas-vindas
        header("Location: carrinho-final.php?mensagem=bem-vindo");
        exit();
    } else {
        // Verifica se o email existe na tabela usuarios
        $sql_check_email = "SELECT * FROM usuarios WHERE email = '$email'";
        $result_check_email = $conn->query($sql_check_email);
        
        if ($result_check_email->num_rows == 0) {
            // Usuário não tem um cadastro
            echo "Você não tem login e senha. Retorne para a página anterior e faça seu cadastro.";
        } else {
            // Senha incorreta
            echo "Senha incorreta. Verifique suas credenciais.";
        }
    }

    // Fecha a conexão
    $conn->close();
} else {
    // Se o método de requisição não for POST, redireciona para a página de login
    header("Location: minha-conta.php");
    exit();
}
?>
