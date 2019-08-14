<?php
   define('DB_HOST'        , "DESKTOP-AC2140U");
   define('DB_USER'        , "sa");
   define('DB_PASSWORD'    , "rainanbgs");
   define('DB_NAME'        , "teste");
   define('DB_DRIVER'      , "sqlsrv");
  
   require_once "Conexao.php";
  
   try{
  
       $Conexao    = Conexao::getConnection();
       $query      = $Conexao->query("SELECT * FROM Tabela_teste");
       $produtos   = $query->fetchAll();
  
   }catch(Exception $e){
       echo $e->getMessage();
       exit;
   }
  
?>
