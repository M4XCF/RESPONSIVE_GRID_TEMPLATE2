<?php
    $conn = new mysqli('localhost', 'root', '', 'universidad');
    if($conn){
        echo "Conexico exitosa";
    }else{
        echo "Hubo un error";
    }
?>