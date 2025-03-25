<?php
    $id_produto = $_GET['id_produto'];
    $nome= $_POST['nome'];
    $preco = doubleval($_POST['preco']);
    require "run.php";
    $produto = new Produto();
    if(isset($id_produto) && !empty($id_produto) && isset($_POST['nome'])){
        if(isset($_FILES['imagem']['name']) && !empty($_FILES['imagem']['name'])){
            copy($_FILES['imagem']['tmp_name'],'media/' . $_FILES["imagem"]["name"]);
            $foto_url = $_FILES["imagem"]["name"];
            $produto->editar_com_foto($id_produto,$nome,$preco,$foto_url);
        }else {
            $produto->editar($id_produto,$nome,$preco);
        }
    }


    header("location: index.php");
?>