<?php
    if(isset($_POST['qtd'])){
        session_start();
        $id_produto = $_GET['id_produto'];
        $qtd = $_POST['qtd'];
        $array = array('id_produto' => $id_produto, 'qtd' => $qtd);
        if (empty($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        array_push($_SESSION['cart'], $array);
    }
    header("location: index.php")
?>