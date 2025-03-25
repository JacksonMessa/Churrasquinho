<?php
    session_start();
    if(isset($_GET['id_item']) && !empty($_SESSION['cart'][$_GET['id_item']])){
        $id_item = $_GET['id_item'];
        unset($_SESSION['cart'][$id_item]);
    }
    header("location: carrinho.php");
?>