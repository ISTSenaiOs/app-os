<?php
include 'conexao.php';

$login = $_POST['login']; 
$senha = $_POST['senha'];

$selectQuery = "SELECT idUsuario, senha FROM usuarios WHERE nif = '$login'";
try {
    $result = $mysqli->query($selectQuery);
    if ($result !== false && $result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedSenhaFromDatabase = $row['senha'];
        if (password_verify($senha, $hashedSenhaFromDatabase)) {

            $idUsuario = $row['idUsuario'];
            
            setcookie('usuario_id', $row['idUsuario'], time() + 60 * 60 * 24 * 60, '/');

            $query = "SELECT nome FROM usuarios WHERE idUsuario = $idUsuario";
            $resultado = $mysqli->query($query);
            if ($resultado != null) {
                setcookie('usuario_nome', $row['nome'], time() + 60 * 60 * 24 * 60, '/');
                header('Location: ../logado.php?page=home');
                exit();
            }
        } else {
            header('Location: ../index.php?error=wrongpassword');
            exit();
        }
    } else {
        header('Location: ../index.php?error=usernotfound');
        exit();
    }
} catch (mysqli_sql_exception $e) {
    echo "Erro ao consultar o banco de dados: " . $e->getMessage();
}
$mysqli->close();
?>
