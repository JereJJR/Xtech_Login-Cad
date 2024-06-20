<?php
session_start();
unset($_SESSION['nomeUser']);
//unset($_SESSION['login']);

//session_abort();
//session_write_close();
echo "<script> window.location.href=' ../index.php'; </script>";
?>