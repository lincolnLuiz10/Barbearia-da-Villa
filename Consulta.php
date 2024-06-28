<?php
include 'conectar.php'; // Assumindo que você já criou uma função de conexão PDO

$pdo = conectar();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Barbearia da Villa</title>

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
    <h2>Tabela de Grupos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
    <?php


    try {

        $sql = "SELECT * FROM tb_grupo";
        $stmt = $pdo->query($sql);
       
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['idgrupo']) . "</td>";
            echo "<td>" . htmlspecialchars($row['descricao']) . "</td>";
            echo "</tr>";
        }
    } catch (\PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
    ?>
</tbody>

    </table>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
