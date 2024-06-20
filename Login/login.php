<?php
// Inicialize a sessão
session_start();
//$_SESSION = array();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php //include "iniciaCSS.php"; 
    ?>

    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <link href="css/bootstrap.css" rel="stylesheet">
    <!--====Mensagem de login====-->
    <!--===============================================================================================-->


</head>

<body>
    <div class="main-container">
        <div class="limiter">
            <div class="container-login100">
                <!-- NESSA classe coloca a cor roxa do login -->
                <div class="wrap-login100">
                    <!-- NESSA classe coloca o meio branco do login -->
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="images/img-01.png" alt="IMG">
                    </div>


                    <form class="login100-form validate-form" action="" method="POST" id="formLogin">
                        <span class="login100-form-title">
                            Acesso de Usuário
                        </span>

                        <!--<div class='alert alert-danger' >
                    Login ou senha incorreto!
            </div>-->
                        <div class="wrap-input100 validate-input" data-salidate="Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="usuario" id="usuario" placeholder="Usuário">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="senha" id="senha" placeholder="Senha"
                                onchange="BuscaAcesso()">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class=" col-md-3 offset-md-2" id="div-CHexibi">
                            <input type="checkbox" onclick="show()" placeholder="Exibir Senha">
                            <span class="span-exibir font-weight-bold">Exibir Senha</span>
                            <!-- <label for="ckbox" class="font-weight-bold">
                                <span>
                                    Exibir Senha
                                </span>
                            </label> -->
                            <script>
                            function show() {
                                var senha = document.getElementById("senha");
                                if (senha.type === "password") {
                                    senha.type = "text";
                                    confsenha.type = "text";
                                } else {
                                    senha.type = "password";
                                    confsenha.type = "password";
                                }
                            }
                            </script>
                        </div>


                        <div class="container-login100-form-btn">
                            <!-- <button class="login100-form-btn btn-primary" type="submit" id="bttLogin" name="bttLogin" form="formLogin">
                                
                                Login
                            </button> -->

                            <button class="login100-form-btn btn-primary" type="button" id="bttLogin" name="bttLogin"
                                onclick="BuscaAcesso()" onkeyup="BuscaAcesso()">Login</button>
                            <!-- <a href=" ../../Inicial/manu.php">Acessar</a> -->

                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1">
                                Esqueceu
                            </span>
                            <a class="txt2" href="#">
                                Usuário / Senha?
                            </a>
                        </div>

                        <div class="text-center p-t-80" id="crieConta">
                            <button type="button" onclick="abreCadUser()">Crie sua conta</button>
                            <!-- <a class="txt2" href="" onclick="abreCadUser()">
                                Crie sua conta


                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a> -->
                        </div>
                    </form>
                </div>
            </div>
                <footer>Sistema By Jeremias &copy; <?php echo date("Y"); ?></footer>
        </div>
    </div>

    <!--===============================================================================================-->
    <!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->

    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>

    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script type="text/javascript" src=js/FuncLogin.js></script>

  
</body>