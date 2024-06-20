<?php
session_start();

require_once '../Conexao/conectaPG.php';

if (!isset($_SESSION['nomeUser'])) {
    header("Location: ../index.php");
    exit;
}

?>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <title>Xtech-Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link type="text/css" rel="stylesheet" href="style_inicial.css">


</head>

<body id="menuInicial">
    <div class="container-login100">
        <div id="resultado">
        </div>
        <div class="cat" name="menu_inical">
            <nav class="navbar sticky-top  navbar-expand-lg navbar-dark " id="navInicio">

                <div class="container-fluid">

                    <a class="nav-link navbar-brand" id="Xtech" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top:-10px;">
                        <img src="../Imagens/icones/avatar_account2.jpg" width="60px" style="margin-top:5px;"> Xtech
                    </a>


                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../Perfil/Perfil.php"> <?php echo $_SESSION['nomeUser'];
                                                                                    echo " ", $_SESSION['sobrenomeUser']; ?></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href=""><img src="../Imagens/icones/user_em.png"> Usuario</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../Logout/logout.php"><img src="../Imagens/icones/Icone-power-2.png" width="30"></img>Logout</a></li>

                    </ul>



                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="principal_inicio.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="BTTalerta">Alerta <span class="badge bg-secondary" id="qtdAviso"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Consulta_User/tabela_user.php" id="BTTalerta">Consultar usuarios<span class="badge bg-secondary" id="qtdAviso"></span></a>
                            </li>


                            
                                </ul>
                            </li>

                            <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="../TelaDev/PrincipalDev.php" role="button" id="areaDev">Area Dev</a>
                        </li>

                        </ul>

                        <form class="d-flex" id="FormLogout">
                            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button> &nbsp -->
                            <label for="" id="LBlogout">Logout</label>
                            <a class="dropdown-item" href="../Logout/logout.php" id="BTTlogout"><img src="../Imagens/icones/Icone-power-2.png" id="IMGlogout"></img></a>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- <img src=" ../Imagens/icones/sistema-operacional.jpg" id="imgPrincipal" class="mx-auto d-block card-img-top"> -->
        </div>

        <script src="js/jQuery/jquery-3.5.1.min.js"></script>       
        <script src="js/FuncInicio.js"></script>
        <!-- <script src="../Cadastro/Cad_Fornecedor/ajax.js"></script> -->
    



</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



</html>