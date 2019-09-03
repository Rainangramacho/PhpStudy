<?php
require_once "conexao.php";

   try{
      if(isset($_POST['submit'])){
         $nome = $_POST['nome'];
         $senha = $_POST['senha'];

         $query = "SELECT nome,senha FROM Usuarios WHERE nome='$nome' and senha='$senha' ";
         $stmt = sqlsrv_query( $conn, $query );

         if($stmt) {
            $dados_usuario = sqlsrv_fetch_array($stmt);

            if(isset($dados_usuario['nome'])&&($dados_usuario['senha'])){
                  echo 'usuário existe';
                  header('Location:login.php?erro=0');

            }else{
                  header('Location: login.php?erro=1');
            }
      
         }else{
              die( print_r( sqlsrv_errors(), true) );
         }

         /* while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
               echo "ID:".$row['id']."<br />"
               ."Nome:".$row['nome']."<br/>";
         }
          */

         sqlsrv_free_stmt( $stmt);
      }
         //header("location: produto-lista.php");
         
   }catch(Exception $e){
       echo $e->getMessage();
       exit;
   }
  
   
?>
