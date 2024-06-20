<?php
require_once '../Conexao/conectaPG.php';
session_start();
// Verificar se está chegando dados por POST
$_statusBD = $_POST['statusBD'];


if ($_statusBD == 1 /*FuncLogin.js manda esse status*/) {
    ColetaPost_Login();
} else if ($_statusBD == 2/*cad_user.js manda esse status*/) {
    ColetaPost_User();
} else if ($_statusBD == 3 /*ajaxInico.js manda esse status*/) {
    selectUser();
} else {
    echo "3";
}


function ColetaPost_Login()
{
    global $acesso;
    global $senha;

    $acesso = $_POST['TXTlogin'];
    $senha = $_POST['TXTsenha'];
    selectLogin();
}

function ColetaPost_User()
{
    global $nome;
    global $sobrenome;
    global $acesso;
    global $email;
    global $senha;
   

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $acesso = $_POST['login'];
    $email = $_POST['email'];
    $senha = $_POST['pass'];    

    if ($nome == "" || $acesso == "" || $senha == "" || $email == "") {
        echo "3";
    } else {
        selectUser();
    }


    //insertUser();

}

function selectLogin()
{

    global $nome;
    global $sobrenome;
    global $acesso;
    global $email;
    global $senha;
  

    try {


        $conexion = conecta();


        $user_selec = $conexion->query("SELECT * FROM tb_usuario WHERE user_nome = '$acesso' AND user_senha = '$senha'");

        if ($user_selec->rowCount() == 1) {

            $user_selec = $user_selec->fetch();


            // Definir as variáveis de sessão
            $_SESSION['nomeUser'] = $user_selec['user_nome'];
            $_SESSION['sobrenomeUser'] = $user_selec['user_sobrenome'];
            $_SESSION['emailUser'] = $user_selec['user_email'];
            //$_SESSION['data_nascimento'] = $result['data_nascimento'];
           
            $_SESSION['idUser'] = $user_selec['id'];
    

            echo "1";
        } else {

            //$_SESSION['msg'] = "<div class='alert alert-danger' id="">Login ou senha incorreto!</div>";
            //echo "<script>alert('ERRO: Usuário ou senha inválidos.');</script>";

            echo "2";
            // $_SESSION['msgErro'] = 'Erro ';
            // echo "<script>alert('Usuario ou senha incorreto')</script>";
            // echo "<script> window.location.href= '../index.php'; </script>";
        }
    } catch (PDOException $e) {
        die($e->getMessage());
        echo "4";
    }
}
function insertUser()
{
    global $nome;
    global $sobrenome;
    global $acesso;
    global $email;
    global $senha;
   


    $conexion = conecta();
    $data_cad = date('d.m.Y');
    try {

        $_InsertUser = $conexion->query("INSERT INTO tb_usuario (user_nome, user_sobrenome, user_login, user_senha, user_email, user_dt_cad) 
      
      VALUES ('$nome', '$sobrenome', '$acesso', '$senha', '$email', '$data_cad')");

        echo "1";
    } catch (PDOException $e) {

        echo "-1";
    }
}

function selectUser()
{

    global $nome;
    global $sobrenome;
    global $acesso;
    global $email;
    global $senha;


    $conexion = conecta();


    $user_selec = $conexion->query("SELECT * FROM tb_usuario WHERE user_login = '$acesso'");

    if ($user_selec->rowCount() >= 1) {
        echo "2";
    } else {
        $user_selec = $conexion->query("SELECT * FROM tb_usuario WHERE user_email = '$email'");

        if ($user_selec->rowCount() >= 1) {
            echo "2";
        } else {
            insertUser();
        }
      
    }
}
