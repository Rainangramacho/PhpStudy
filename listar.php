<?php
require_once "conexao.php";

$query = "SELECT * FROM Usuarios";
$stmt = sqlsrv_query( $conn, $query );

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    echo "ID:".$row['id']."<br />"
    ."Nome:".$row['nome']."<br/>";
}
?>