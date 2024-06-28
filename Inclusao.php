<?php
include 'conectar.php'; // Assumindo que você já criou uma função de conexão PDO

$pdo = conectar();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Inclusão de Grupo</title>

    <!-- online -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css&quot; rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script&gt;

    <!-- offline -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2>Cadastro de Grupo</h2>
    <form method="post">
        <div class="form-group">
            <label>Descrição:</label>
            <input type="text" class="form-control" name="descricao" placeholder="Entre com a descrição" required>
        </div>
        <button type="submit" name="btnAdd" class="btn btn-primary">Adicionar</button>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['btnAdd'])) {

    $descricao = $_POST['descricao'];

    if (!empty($descricao)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO tb_grupo (descricao) VALUES (:descricao)");
            $stmt->bindParam(':descricao', $descricao);
            $stmt->execute();
            echo "Grupo adicionado com sucesso!";
        } catch (\PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    } else {
        echo "Descrição não pode ser vazia!";
    }
}
?>
