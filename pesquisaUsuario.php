<?php
include "conexao.php";

$email =$_POST['email'];
$senha =$_POST['senha'];

$comandosql = "SELECT id_usuario, nome_usuario, tipo_usuario FROM tbusuario_Alef where email_usuario = '$email' and senha_usuario = '$senha'";

$resultado = $conn->query($comandosql);

if($resultado->num_rows>0){
    $row = $resultado->fetch_assoc();
    echo $row['nome_usuario']."|".$row['id_usuario']."|".$row["tipo_usuario"];
}else{
echo"erro";
}

$conn->close();
?>