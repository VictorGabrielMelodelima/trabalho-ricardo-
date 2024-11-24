<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtém os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    //LOGAR:
    $sql = mysqli_query($conn, "SELECT * FROM login WHERE nome = '$nome' AND senha = '$senha'");
    if(mysqli_num_rows($sql) > 0){
        echo "Login efetuado com sucesso!";
        header("Location: ../html/index.html");
    }else{
        echo "Usuário ou senha inválidos!";
        header("Location: ../html/login.html");
    }
}
?>
