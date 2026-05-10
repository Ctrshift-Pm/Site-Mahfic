<?php
    include("database.php");
    
    $usuario = "Mahfic";
    $senha = "Cris011284";
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios(nome_usuario, senha_usuario) VALUES ('$usuario', '$hash')";

    try{
        mysqli_query($link, $sql);
        echo"Usuario está registrado";
    }
    catch(mysqli_sql_exception){
        echo"Erro ao registrar usuário";
    }
    mysqli_close($link); 
?>