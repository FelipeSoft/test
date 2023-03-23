<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    <form action="actions/register_action.php" method="POST">
        <label>
            Nome
            <input type="text" name="name">
        </label>
        <label>
            Email
            <input type="email" name="email">
        </label>
        <label>
            Senha
            <input type="password" name="password">
        </label>
        <button>Cadastrar</button>
        <p>Já possui uma conta?  <a href="login.php">Entre</a></p>
    </form>
</body>
</html>