<?php
header('Content-Type: application/json');

require_once '../Conexao/conectaPG.php';
session_start();


try {
    $conexion = conecta();
    $stmt = $conexion->query('SELECT * FROM tb_usuario');
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $json_data = json_encode($usuarios, JSON_PRETTY_PRINT);  

    $folder_path = '../API/';

    // Nome do arquivo JSON
    $file_name = 'usuarios.json';

    // Cria a pasta se ela não existir
    if (!is_dir($folder_path)) {
        mkdir($folder_path, 0777, true);
    }

    // Caminho completo do arquivo
    $file_path = $folder_path . $file_name;

    // Salvando o arquivo JSON no servidor
    file_put_contents($file_path, $json_data);

    // Retornando os dados em formato JSON
    echo json_encode($usuarios);

} catch (PDOException $e) {
    // Registrando o erro no log do servidor
    error_log("Erro de conexão: " . $e->getMessage());

    // Retornando uma resposta de erro em formato JSON
    echo json_encode(['error' => 'Erro ao conectar ao banco de dados']);
    http_response_code(500);
}
?>