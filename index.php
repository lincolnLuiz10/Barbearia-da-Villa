<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia da Villa - Login</title>
    <link rel="stylesheet" href="formato.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="Barbearia da Villa">
            <h1>Barbearia da Villa</h1>
        </div>
        <h2>ENTRE FEIO E CABELUDO, SAIA APENAS FEIO</h2>
        <form action="login.php" method="POST">
            <div class="input-container">
                <label for="email"><img src="user-icon.png" alt="Ícone de usuário"> Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-container">
                <label for="senha"><img src="lock-icon.png" alt="Ícone de cadeado"> Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Não tem login? <a href="register.php">Crie seu usuário</a></p>
    </div>
</body>
</html>
