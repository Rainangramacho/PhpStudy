<?php
   define('DB_HOST'        , "DESKTOP-AC2140U");
   define('DB_USER'        , "sa");
   define('DB_PASSWORD'    , "rainanbgs");
   define('DB_NAME'        , "teste");
   define('DB_DRIVER'      , "sqlsrv");
  
   

   $serverName = "DESKTOP-AC2140U";
$connectionInfo = array( "Database"=>"teste", "UID"=>"sa", "PWD"=>"rainanbgs");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
  
   try{
  
      
       $query = "SELECT * FROM Tabela_teste";
       
      
       
$stmt = sqlsrv_query( $conn, $query );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['id']."<br />";
}

sqlsrv_free_stmt( $stmt);
  
   }catch(Exception $e){
       echo $e->getMessage();
       exit;
   }
  
   
?>
