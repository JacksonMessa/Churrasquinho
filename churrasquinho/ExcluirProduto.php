<?php
    $id_produto = $_GET['id_produto'];
    if(isset($id_produto) && !empty($id_produto)){
        require "run.php";
        $produto = new Produto();
        $produto->excluir($id_produto);
    }  
    header("location: index.php")
?>