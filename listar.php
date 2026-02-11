<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
    <title>Lista de usuários em tabela</title>
  </head>
  <body>
    <div class="container">
        <h1>Lista de Usuários em tabela</h1>
        <h3><a href="index.html">Voltar</a></h3>
        <table class="table table-dark">
          <?php
          include "menu.php";
          ?>
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Nome</th>
    <th scope="col">Email</th>
    <th scope="col">senha</th>
    <th scope="col">Tipo de usuario</th>
    </tr>
  </thead>
  <tbody>
    <?php
        /*1- chamando o arquivo de conexao*/
            require "conexaoServidor.php";
 
        /*2- criando o comando sql para consulta dos registros*/
            $comandoSql="select P.id_usuario, P.nome_usuario, P.email_usuario, P.senha_usuario, P.tipo_usuario FROM tb_usuario P ORDER BY P.id_usuario;";
            $conn->set_charset("utf8mb4");
 
        /*3- executando o comando sql*/
            $resultado = mysqli_query($conn,$comandoSql);
 
        /*4- pegando os dados da consulta e exibindo*/
            while($dados=mysqli_fetch_assoc($resultado)){
                $id=$dados["id_usuario"];
                $nome=$dados["nome_usuario"];
                $email=$dados["email_usuario"];
                $senha=$dados["senha_usuario"];
                $senha_oculta = str_repeat('*', strlen($senha));
                $tipoUsuario=$dados["tipo_usuario"];
 
                //echo "Id: $id <br>";
               // echo "Nome: $nome <br>";
                //echo "preco: $preco <br>";
                //echo "categoria: $cate <br><br>";
              echo " <tr>
      <td>$id</td>
      <td>$nome</td>
      <td>$email</td>
      <td>$senha_oculta</td>
      <td>$tipoUsuario</td>
    </tr>";
            }
           
    ?>
 
        </tbody>
        </table>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
 
 
 