<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/styles/login-screen.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<?php
include('assets/functions/conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo "<script>
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Preencha seu e-mail',
            showConfirmButton: false,
            timer: 1500
          });</script>";
    }
    else if(strlen($_POST['senha']) == 0){
        echo "<script>
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Preencha sua senha',
            showConfirmButton: false,
            timer: 1500
          });</script>";
    }
    else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código".$mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            
            header("Location: assets/pages/painel.php");
        }else{
            echo "<script>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'E-mail ou senha inválidos',
                showConfirmButton: false,
                timer: 1500
              });</script>";
        }
    }
}
?>

    <div class="login-container">
        <img src="assets/img/Group2.png" alt="" class="img-esquerda" width="1255px">

        <div class="direita-container">
            <div class="direita-texter">
                <img src="assets/img/logo.png" alt="" width="500px" class="logo-img">

                <form action="" class="login-form" method="POST">
                    <h1>Login</h1>
                    <input type="text" name="email" class="login-input">
                    <br>
                    <br>
                    <h1>Senha</h1>
                    <input type="password" name="senha" class="login-input">
                    <br>
                    <a href="/" class="lost-key">Esqueceu a senha?</a>
                    <br>
                    <br>
                    <input type="submit" value="Entrar" name="" class="submit-keys">
                </form>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>