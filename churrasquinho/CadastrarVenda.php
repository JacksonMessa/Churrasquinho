<?php
    require "run.php";
    print_r($_SESSION['cart']);
    if(!empty($_SESSION['cart'])){  
        $produto = new Produto();   
        $qtd_total = 0;
        $preco_total = 0;
        foreach ($_SESSION['cart'] as $item){
            $itembd = $produto->get($item["id_produto"]);
            $qtd_total += $item["qtd"];
            $preco_total += $itembd["preco"]*$item["qtd"];
        }
        $venda = new Venda();
        $id_venda = $venda->cadastrar($qtd_total,$preco_total);
        $item_venda = new ItemVenda();   
        foreach ($_SESSION['cart'] as $item){
            $item_venda->cadastrar($id_venda,$item['id_produto'],$item['qtd']);
        }
        session_destroy();
    }
    header("location: index.php");
?>