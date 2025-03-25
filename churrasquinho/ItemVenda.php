<?php
    class ItemVenda extends model{
        public function cadastrar($id_venda,$id_produto,$qtd){
            $sql = "INSERT INTO item_venda(id_venda,id_produto,qtd) VALUES (:id_venda,:id_produto,:qtd)";
            $sql = $this->db->prepare($sql);
            $sql->bindvalue(":id_venda",$id_venda);
            $sql->bindvalue(":id_produto",$id_produto);
            $sql->bindvalue(":qtd",$qtd);
            $sql->execute();
        }

        public function getAllVenda($id_venda){
            $array = array();
            $sql = "Select p.nome, iv.qtd, (p.preco *  iv.qtd) as preco_total
            from item_venda iv, produto p        
            where id_venda = :id_venda and  iv.id_produto = p.id_produto 
            order by p.id_produto";
            $sql = $this->db->prepare($sql);
            $sql->bindvalue(":id_venda",$id_venda);
            $sql->execute();
            if($sql->rowCount()>0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $array;
        }
    }
?>