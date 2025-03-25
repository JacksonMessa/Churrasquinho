<?php
    class Venda extends model{
        public function cadastrar($qtd_total,$preco_total){
            $sql = "INSERT INTO venda(qtd_total,preco_total) VALUES (:qtd_total,:preco_total)";
            $sql = $this->db->prepare($sql);
            $sql->bindvalue(":qtd_total",$qtd_total);
            $sql->bindvalue(":preco_total",$preco_total);
            $sql->execute();
            return $this->db->lastInsertId();
        }

        public function editar($id_venda,$status){
            $sql = "UPDATE venda set status = :status where id_venda = :id_venda";
            $sql = $this->db->prepare($sql);
            $sql->bindvalue(":id_venda",$id_venda);
            $sql->bindvalue(":status",$status);
            $sql->execute();
        }

        public function getAllPedidos(){
            $array = array();
            $sql = "Select * from venda where status !='Entregue' order by id_venda";
            $sql = $this->db->query($sql);
            if($sql->rowCount()>0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $array;
        }

        public function getAllVendas(){
            $array = array();
            $sql = "Select * from venda where status ='Entregue' order by id_venda DESC";
            $sql = $this->db->query($sql);
            if($sql->rowCount()>0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $array;
        }
    }
?>