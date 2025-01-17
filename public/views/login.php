<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/css/login.css">
    <title>Login - SCAP</title>
</head>

<body>
    <header>
        <a href="index.php">
            <h1>Login - SCAP</h1>
        </a>
    </header>
    <main>
        <div class="login-container">
            <h1>Login</h1>
            <form action="./" method="post">
                <input type="email" placeholder="Digite seu e-mail" name="email" required>
                <input type="password" placeholder="Senha" name="senha" required>
                <button type="submit" name="login">Entrar</button>
            </form>
        </div>
    </main>
</body>

</html>