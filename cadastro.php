<?php

// CONEXÃO COM O BANCO DE DADOS

$servername = "127.0.0.1";
$username = "root"; //nome usuário mysql, utilizamos o padrão
$password = ""; //não utilizamos senha
$dbname = "techinova"; //nome do banco de dados

//criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

//Verificar a conexão
if ($conn->connect_error ) {
    die("Conexão falhou: ".$conn->connect_error);
}

//Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //Recuperando os dados do formulário
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = $_POST["senha"];


//Inserção dos dados na tabela do banco de dados 

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    //Verifica se a conexão no SQL foi bem sucedida
if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucasso. Volte à página anterior e faça o seu login";
} else {
    echo "Erro ".$sql."<br>".$conn->error;
}

}

//Fechar a conexão com o banco de dados
$conn->close();


?>