<?php

$serverName = "DESKTOP-AC2140U";
   $connectionInfo = array( "Database"=>"teste", "UID"=>"sa", "PWD"=>"rainanbgs");
   $conn = sqlsrv_connect( $serverName, $connectionInfo );
   if( $conn === false ) {
      die( print_r( sqlsrv_errors(), true));
   }

?>