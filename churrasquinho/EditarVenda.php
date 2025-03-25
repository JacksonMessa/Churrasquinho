<?php
    $id_venda = $_GET['id_venda'];
    $status= $_POST['status'];
    require "run.php";
    $venda = new Venda();
    if(isset($id_venda) && !empty($id_venda) && isset($_POST['status'])){
        $venda->editar($id_venda,$status);
    }
    $fallback = 'pedidos.php';
    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
    header("location: {$anterior}");
?>