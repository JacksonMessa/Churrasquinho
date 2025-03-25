<html>
    <?php 
        require 'head.php'; 
        require 'run.php';
        $produto = new Produto();
    ?>
    <body>
        <?php require 'menu.php' ?> 
        <?php if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
            <table class="table table-striped">
                <thead>
                    <th>Nome do Produto</th>
                    <th>QTD</th>
                    <th>Preço</th>
                    <th>#</th>
                </thead>
                <tbody>
                <?php
                    $qtd_total=0;
                    $preco_total=0;
                ?> 
                <?php foreach ($_SESSION['cart'] as $key => $item) :?>
                    <tr>
                        <?php $itembd = $produto->get($item["id_produto"]);?>
                        <td><?php echo($itembd["nome"]);?></td>
                        <td><?php echo($item["qtd"]);?></td>
                        <td>R$<?php echo number_format(($itembd["preco"]*$item["qtd"]), 2, ',', '');?></td>
                        <td><a href="RemoverCarrinho.php?id_item=<?php echo($key); ?>" class="btn botao-padrao" onclick="return confirm('Deseja Remover Esse Item do Carrinho?')">
                            Remover Item
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                            </svg>
                        </a></td>
                    </tr>
                    <?php
                        $qtd_total += $item["qtd"];
                        $preco_total += $itembd["preco"]*$item["qtd"];
                    ?>    
                <?php endforeach ?>
                    <tr>
                        <td>Total</td>
                        <td><?php echo $qtd_total;?></td>
                        <td>R$<?php echo number_format(($preco_total), 2, ',', '');?></td>
                        <td><a href="CadastrarVenda.php" class="btn btn-success">
                            Finalizar Compra
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
                            </svg>
                        </a></td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <h1>Não Há Nenhum Produto no Carrinho</h1>
        <?php endif ?>
    <body>      
</html>