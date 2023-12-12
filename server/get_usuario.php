<?php
// get de usuario para o menu e edição de perfil
include 'conexao.php';

if (isset($_COOKIE['usuario_id'])) {
    $idUsuario = $_COOKIE['usuario_id'];

    $query = "SELECT nome, nif, status FROM usuarios WHERE idUsuario = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $idUsuario);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nome = $row['nome'];
                $nif = $row['nif'];
                $status = $row['status'];
            }
        } 
    } 
}

