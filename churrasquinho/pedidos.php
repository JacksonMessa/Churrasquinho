<html>
    <?php 
        require 'head.php'; 
        require 'run.php';
        $venda = new Venda();
        $item_venda = new ItemVenda();
        $dados = $venda->getAllPedidos();
    ?>
    <body>
        <?php require 'menu.php' ?> 
        <table class="table table-striped">
            <thead>
                <th>ID Pedido</th>
                <th>Produtos</th>
                <th>Preço Total</th>
                <th>QTD Total</th>
                <th>Status</th>
            </thead>
            <tbody>
            <?php foreach ($dados as $item): ?>
                <?php $dados_item_venda = $item_venda->getAllVenda($item["id_venda"]); ?>
                <tr>
                    <td><?php echo($item["id_venda"]);?></td>
                    <td>
                    <div class="accordion accordion-flush" id="accordionFlush<?php echo($item["id_venda"]);?>">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo($item["id_venda"]);?>" aria-expanded="false" aria-controls="flush-collapse<?php echo($item["id_venda"]);?>">
                               Itens da venda
                            </button>
                            </h2>
                            <div id="flush-collapse<?php echo($item["id_venda"]);?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlush<?php echo($item["id_venda"]);?>">
                                <div class="accordion-body"><?php foreach ($dados_item_venda as $item_iv): ?>
                                    <?php echo $item_iv['nome'] . " - " . $item_iv['qtd'] . "x - R$" . number_format($item_iv['preco_total'], 2, ',', '') . "<br>"; ?>
                                <?php endforeach ?></div>
                            </div>
                        </div>
                    </td>

                    <td>R$<?php echo number_format(($item["preco_total"]), 2, ',', '');?></td>
                    <td><?php echo($item["qtd_total"]);?></td>
                    <form action="EditarVenda.php?id_venda=<?php echo($item["id_venda"]);?>" method="POST">
                        <td><select name="status" class="form-select selecionar" onchange="document.getElementById('confirm<?php echo($item['id_venda'])?>').style.visibility='visible';">
                            <option <?php if($item['status']=="Esperando Aprovação") echo 'selected' ?>>Esperando Aprovação</option>
                            <option <?php if($item['status']=="Aprovado") echo 'selected' ?>>Aprovado</option>
                            <option <?php if($item['status']=="Na Cozinha") echo 'selected' ?>>Na Cozinha</option>
                            <option <?php if($item['status']=="Pronto") echo 'selected' ?>>Pronto</option>
                            <option <?php if($item['status']=="Em Entrega") echo 'selected' ?>>Em Entrega</option>
                            <option <?php if($item['status']=="Entregue") echo 'selected' ?>>Entregue</option>
                        </select></td>
                        <td>
                            <button type="submit" id="confirm<?php echo($item["id_venda"]);?>" class="btn btn-success escondido">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
                                </svg>
                            </button>
                        </td>
                    </form>
                </tr> 
            <?php endforeach ?>
            </tbody>
        </table>
    <body>      
</html>