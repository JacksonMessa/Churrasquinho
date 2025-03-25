<?php
    require 'run.php';
    $produto = new Produto();
    $item = $produto->get($_GET['id_produto']);
?>

<html>
    <?php require 'head.php' ?>
    <body>
        <?php require 'menu.php' ?>  
        <form action="EditarProduto.php?id_produto=<?php echo $item['id_produto']?>" enctype="multipart/form-data" method="Post" class="formulario">         
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <label for="nome">Nome do Produto</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite o nome do produto" required value="<?php echo $item['nome']?>">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <label for="nome">Preço(R$)</label>
                        <input type="number" name="preco" class="form-control" placeholder="0,00" required step=0.01 value="<?php echo ($item['preco'])?>">
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <label for="nome">Foto do Produto</label>
                        <input type="file" name="imagem" class="form-control">
                    </div>
                </div>
            </div>
            <div class="botao">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <button type="submit" class="btn">Editar</button>
                    </div>
                </div>
            </div>
            
        </form>
    <body>        
</html>