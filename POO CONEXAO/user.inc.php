<?php 
require_once 'dbh.inc.php';

class User extends Dbh{

    function getAllUsers(){
        $sql = "SELECT * FROM Usuarios";
        $result = $this->connect()->sqlsrv_query($conn,$sql);
        $numRows = $result->sqlsrv_num_rows($result);

        if($numRows > 0){ // se tiver algum dado no banco de dados, mostre pra mim
            while ($row = $result->sqlsrv_fetch_array()){
                $data[] = $row;
            }
            return $data;
        }

    }


}


?>