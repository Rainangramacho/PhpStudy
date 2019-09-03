<?php 
require_once 'user.inc.php';
class ViewUser extends User{

    function showAllUsers(){
        $datas = $this->getAllUsers();
        foreach ($datas as $data) { // para cada $data, imprimir oq esta no echo
            echo $data['id'];
            echo $data['senha'];
        }

    }


}


?>