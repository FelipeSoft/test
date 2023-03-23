<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="actions/login_action.php" method="POST">
        <label>
            Email
            <input type="email" name="email">
        </label>
        <label>
            Senha
            <input type="password" name="password">
        </label>
        <button>Entrar</button>
       <p>Não possui uma conta?  <a href="register.php">Cadastre-se</a></p>
    </form>
</body>
</html>