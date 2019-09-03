<?php
require_once "conexao.php";

   try{
        if(isset($_POST['submit'])){
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            $query = "INSERT INTO Usuarios (nome,senha) VALUES ('$nome','$senha');";
            $stmt = sqlsrv_query( $conn, $query );

            if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }else{
                echo "Usuário Cadastrado com sucesso!";
            }

            sqlsrv_free_stmt( $stmt);

        }
   }catch(Exception $e){
       echo $e->getMessage();
       exit;
   }
  
   
?>
