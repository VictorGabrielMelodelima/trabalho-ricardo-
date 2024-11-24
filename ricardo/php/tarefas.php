<?php
// Conectar ao banco de dados
$servername = "localhost"; 
$username = "root";     
$password = "";    
$dbname = "usuarios"; // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$adicionartarefas = isset($_POST["tarefas"]);
$nome = $_POST["nome"];

if ($adicionartarefas) {
    // Inserir a tarefa no banco de dados
    $sql = "INSERT INTO tarefas (nome) VALUES ('$nome')";
        mysqli_query($conn, $sql); 
    header("Location: ../html/index.html");
}


?>
