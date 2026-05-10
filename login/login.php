<?php
include("database.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style.css" type="text/css">
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <title>Login Mahfic</title>
</head>

<body style="background-color: #080710">
    <div class="w3-top">
        <div class="w3-bar w3-black" id="BarraNav">
            <a href="../index.php" class="w3-bar-item w3-button w3-wide">MAHFIC</a>
            <div class="w3-right">
                <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user-circle-o"></i> LOGIN</a>
            </div>
        </div>
    </div>
    <div class="w3-container" style="padding:165px 32px"></div>

    <div>
        <div class="forma"></div>
        <div class="forma"></div>
    </div>

    <div class="w3-container w3-display-container">
        <form action="" class="w3-quarter w3-display-middle w3-panel w3-border w3-padding-large w3-round-large" method="POST">
            <h2 class="h2-ref w3-text-white w3-center">Login Mahfic</h2>
            <div class="w3-bar-item">
                <label for="username" class="w3-text-white">Nome de Usuário</label>
                <input type="text" class="w3-input w3-margin-right" placeholder="Nome de Usuário" name="usuario">
            </div>
            <br>
            <div class="w3-bar-item">
                <label for="password" class="w3-text-white">Senha</label>
                <input type="password" class="w3-input w3-margin-right" placeholder="Senha" name="senha">
            </div>
            <br>
            <div class="w3-bar-item w3-center">
                <input type="submit" class="w3-btn w3-white" value="Fazer login" name="submit"></button>
            </div>
        </form>
    </div>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    if (empty($usuario)) {
        echo "<script>alert('Insira um nome de usuário!')</script>";
    } else if (empty($senha)) {
        echo "<script>alert('Insira uma senha!')</script>";
    } else {
        $sql = "SELECT id_usuario, nome_usuario, senha_usuario FROM usuarios WHERE nome_usuario = '$usuario' LIMIT 1";
        $resultado = mysqli_query($link, $sql);
        $user = mysqli_fetch_assoc($resultado);

        if (!$user || !password_verify($senha, $user['senha_usuario'])) {
            echo "<script>alert('Usuário ou senha incorretos!')</script>";
        } else {
            echo "<script>alert('Login efetuado com sucesso!')</script>";
            echo "<script>window.location.href = '../Página Adm/Untitled-1.html'</script>";
        }
    }
}
?>
