<?php
session_start();

$_nivelLogin = $_SESSION['nivelUser'];
$_terceiro = $_SESSION['terceiroUser'];
$_empresaUser = $_SESSION['empresaUser'];
// if ($_nivelLogin != 'adm' && $_nivelLogin != 'dev') {
if ($_terceiro == 'true') {
//echo $_nivelLogin;
header("Location: ../Inicial/Inicio_Ter.php");
}
else{
    header("Location: ../Inicial/principal_inicio.php");  
}

