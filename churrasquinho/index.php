<?php
    require 'run.php';
    $produto = new Produto();
    $dados = $produto->getAll();
?>

<html>
    <?php require 'head.php' ?>
    <body>
        <?php require 'menu.php' ?>  
        <div class="container">
            <div class="row cardapio">
                <?php foreach ($dados as $item): ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 item text-center">
                        <?php if(!empty($item['foto_url'])):?>
                            <img src=<?php echo'media/' . $item['foto_url'];?> class='imagem'>
                        <?php else:  ?>
                            <img src='media/default.jpg' class='imagem'>
                        <?php endif ?>
                        <p class="nome"><?php echo $item['nome']?></p>
                        <p>R$<?php echo number_format($item['preco'], 2, ',', '')?></p>
                        <div class="container">
                            <div class="row">
                                <form action="AdicionarCarrinho.php?id_produto=<?php echo $item['id_produto']?>" method="POST" class="add">
                                    <div class="col-lg-6 col-sm-6">
                                        <input type="number" name="qtd" class="form-control" value="1" id="qtd<?php echo $item['id_produto']?>" min=1 max=99>
                                    </div>
                                    <div class="col-lg-6 col-sm-56">
                                        <button class="btn btn-dark" type="submit" onclick = "alert(document.getElementById('qtd<?php echo $item['id_produto']?>').value + ' ' + '<?php echo  $item['nome'] . ' adicionado(s) ao carrinho!' ?>')">
                                            Adicionar
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <script>
                            
                        </script>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <body>        
</html>