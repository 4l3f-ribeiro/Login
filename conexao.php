<?php
//Conexao com o banco
$host = "localhost";
$user = "root";
$password = "";
$dbname = "bdsistema_Alef";

$conn = new mysqli($host,$user,$password,$dbname);

//Verifica Conexão

if($conn->connect_error){
    die("Conexão Falhou: ".$conn->connect_error);
}else{
    //echo"Conexão ok!!";

 


}
?>