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
                        <a href="editar_produto.php?id_produto=<?php echo $item['id_produto']?>" class="btn btn-dark">
                            Editar
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                        </a>
                        <a href="ExcluirProduto.php?id_produto=<?php echo $item['id_produto']?>" class="btn btn-dark" onclick="return confirm('Deseja Excluir?')">
                            Excluir
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                            </svg>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <body>        
</html>