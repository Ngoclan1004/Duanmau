<?php
    function list_danhmuc(){
        $sql = "SELECT * FROM danhmuc";
        $resul = pdo_query($sql);
        return $resul;
    }
?>