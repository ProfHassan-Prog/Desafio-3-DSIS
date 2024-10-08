<?php
// Passo 1: Conectar no Server

$servername = "";
$username = "root";
$password = "";
$dbname = "maracutaia";

$conn = new mysqli( $servername, $username, $password, $dbname );

//Verificar a Conexão
if($conn -> connect_error){
    die("Deu merda" . $conn->connect_error);
}

//Passo 2: Pegar os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$dataNasc = $_POST[''];


?>