<?php 

class dbh{
    public $serverName;
    

    public function connect(){
        $serverName= "DESKTOP-AC2140U";
       

        $connectionInfo = array( "Database"=>"teste", "UID"=>"sa", "PWD"=>"rainanbgs");
        $conn = sqlsrv_connect( $serverName, $connectionInfo );
        return $conn;

        if( $conn ) {
            echo "Connection established.<br />";
       }else{
            echo "Connection could not be established.<br />";
            die( print_r( sqlsrv_errors(), true));
       }

    }

}

?>