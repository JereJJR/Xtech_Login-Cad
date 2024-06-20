<?php
function conecta(){
  {

    $endereco = 'localhost';
    $senha = 'jpaj';
    $banco = 'Xtech';
    $porta = '5432';
    $usuario = 'postgres';
   
  
    try {    
  
      $pdo = new PDO("pgsql:host=$endereco;port=$porta;dbname=$banco", $usuario, $senha, 
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

     
      //echo "Conectado no banco de dados!!!";
      return $pdo;
    } catch (PDOException $e) {      
        echo "Falha ao conectar ao banco de dados. <br/>";
        die($e->getMessage());
      //}
    }
  }
}
