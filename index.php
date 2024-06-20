<?php
session_start();


if (isset($_SESSION['nomeUser'])) {

    header("Location: Inicial/principal_inicio.php");
    exit;  
}
else{
 
    echo "<script> window.location.href=' Login/login.php'; </script>";
}

?>