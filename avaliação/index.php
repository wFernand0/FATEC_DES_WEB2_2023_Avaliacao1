<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title> Cadastro estacionamento Fatec Araras </title>
    </head>
    <body>
        <h2> Registro de novos alunos/veículos no estacionamento </h2>
        <br>
        <form action="registro.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome Completo:"><br><br>                  
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="Ra" name="Ra" placeholder="R.A:"><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="Placa" name="Placa" placeholder="Placa do veículo:"><br><br>
                </div>
               
            <input type="submit" value="Registrar Aluno">
            <a href="logout.php">Sair</a>
            <br><br>
            <a href="dados.php">Visualizar alunos cadastrados</a>
        </form>
    </body>
</html>
