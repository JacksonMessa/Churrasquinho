<html>
    <?php require 'head.php' ?>
    <body>
        <?php require 'menu.php' ?>  
        <form action="CadastrarProduto.php" enctype="multipart/form-data" method="Post" class="formulario">         
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <label for="nome">Nome do Produto</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite o nome do produto" required>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <label for="nome">Preço(R$)</label>
                        <input type="number" name="preco" class="form-control" placeholder="0,00" required step=0.01>
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
                        <button type="submit" class="btn">Cadastrar</button>
                    </div>
                </div>
            </div>
            
        </form>
    <body>        
</html>