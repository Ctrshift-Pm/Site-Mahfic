<?php
include("database.php");

$usuario = getenv('MAHFIC_SEED_USER') ?: 'Mahfic';
$senha = getenv('MAHFIC_SEED_PASSWORD') ?: '';

if ($senha === '') {
    exit('Defina MAHFIC_SEED_PASSWORD para criar o usuario inicial.');
}

$hash = password_hash($senha, PASSWORD_DEFAULT);
$sql = "INSERT INTO usuarios(nome_usuario, senha_usuario) VALUES ('$usuario', '$hash')";

try {
    mysqli_query($link, $sql);
    echo "Usuario está registrado";
} catch (mysqli_sql_exception) {
    echo "Erro ao registrar usuário";
}

mysqli_close($link);
?>
