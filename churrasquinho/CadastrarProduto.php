<?php
    $nome= $_POST['nome'];
    $preco = doubleval($_POST['preco']);
    if(isset($_POST['nome'])){
        if(isset($_FILES['imagem']['name']) && !empty($_FILES['imagem']['name'])){
            copy($_FILES['imagem']['tmp_name'],'media/' . $_FILES["imagem"]["name"]);
            $foto_url = $_FILES["imagem"]["name"];
        }else {
            $foto_url = NULL;
        }
        require "run.php";
        $produto = new Produto();
        $produto->cadastrar($nome,$preco,$foto_url);
    }  
    header("location: index.php")
?>