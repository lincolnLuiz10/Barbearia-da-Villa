<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Substitua estes valores com as credenciais reais do seu banco de dados
    $servername = "localhost";
    $username = "usuario";
    $password = "senha";
    $dbname = "clientes";

    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->'formato.css');
    }

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica as credenciais do usuário (substitua pela sua consulta real)
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login bem-sucedido
        echo "Login bem-sucedido!";
    } else {
        // Falha no login
        echo "Email ou senha inválidos.";
    }

    $conn->close();
}
?>
