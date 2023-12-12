<?php
// post de cadastro de users
include 'conexao.php';

$dataCadastro = date("Y-m-d H:i:s");  

$nome = $_POST['nome'];
$nif = $_POST['nif'];
$senha = $_POST['senha'];
$status = 1;
// $tipo = $_POST['tipo'];
// $imgDefault = '../assets/images/default_perfil.jpg';

$hashedSenha = password_hash($senha, PASSWORD_DEFAULT);
$insertQuery = "INSERT INTO usuarios (nome, nif, senha, status) VALUES ('$nome', '$nif', '$hashedSenha', '$status')";


try {
    if ($mysqli->query($insertQuery) === TRUE) {
        $newUserId = $mysqli->insert_id; 
        $_SESSION['idUsuario'] = $newUserId; 
        setcookie('usuario_id', $newUserId, time() + 60 * 60 * 24 * 60, '/');
    
        if (isset($_SESSION['previous_url'])) {
            $redirect_url = $_SESSION['previous_url'];
            
            header("Location: $redirect_url");
            exit();
        } else {
            header('Location: ../logado.php?page=home');
            exit();
        } 
    } else {
        echo "Erro ao inserir usuário: " . $mysqli->error;
    }
} catch (mysqli_sql_exception $e) {

    if ($e->getCode() == 1062) {
        if (strpos($e->getMessage(), 'email') !== false) {
            header('Location: ../cadastrar.php?error=email_duplicate');
        } elseif (strpos($e->getMessage(), 'nome') !== false) {
            header('Location: ../cadastrar.php?error=nome_duplicate');
        } else {
            header('Location: ../cadastrar.php?error=duplicate');
        }
    } else {
        echo "Erro no banco de dados: " . $e->getMessage();
    }
}

$mysqli->close();

?>
