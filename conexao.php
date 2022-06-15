<?php
// Parâmetros para criar a conexão
$servername = "localhost";
$username = "id18636309_projetofinal";  //id18636309_projetofinal 
$password = "EIDe+vAQgS0whn4)";  //EIDe+vAQgS0whn4)
$dbname = "id18636309_esteticaebeleza";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);//$servername, $username, $password, $dbname

// Checando a conexão
if ($conn->connect_error) {
  die("Se ferrou hehehehe: " . $conn->connect_error);
}

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];

$sql = "INSERT INTO cliente (nome,email,senha,cpf,telefone) VALUES ('$nome','$email','$senha','$cpf','$telefone')";

if($conn->query($sql)=== TRUE){
    echo "DEU CERTO FINALMENTE!!!";
} else{
    echo"deu merda".$sql. "<br>" .$conn->error;
}

$conn->close();

?>




