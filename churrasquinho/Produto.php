<?php
    class Produto extends model{
        
        public function cadastrar($nome,$preco,$foto_url){
            $sql = "INSERT INTO produto(nome,preco,foto_url) VALUES (:nome,:preco,:foto_url)";
            $sql = $this->db->prepare($sql);
            $sql->bindvalue(":nome",$nome);
            $sql->bindvalue(":preco",$preco);
            $sql->bindvalue(":foto_url",$foto_url);
            $sql->execute();
        }

        public function editar_com_foto($id_produto,$nome,$preco,$foto_url){
            $sql = "UPDATE produto set nome = :nome,preco = :preco,foto_url = :foto_url where id_produto = :id_produto";
            $sql = $this->db->prepare($sql);
            $sql->bindvalue(":nome",$nome);
            $sql->bindvalue(":preco",$preco);
            $sql->bindvalue(":foto_url",$foto_url);
            $sql->bindvalue(":id_produto",$id_produto);
            $sql->execute();
        }

        public function editar($id_produto,$nome,$preco){
            $sql = "UPDATE produto set nome = :nome,preco = :preco where id_produto = :id_produto";
            $sql = $this->db->prepare($sql);
            $sql->bindvalue(":nome",$nome);
            $sql->bindvalue(":preco",$preco);
            $sql->bindvalue(":id_produto",$id_produto);
            $sql->execute();
        }

        public function excluir($id_produto){
            $sql = "delete from produto where id_produto = :id_produto";
            $sql = $this->db->prepare($sql);
            $sql->bindvalue(':id_produto',$id_produto);
            $sql->execute();
        }

        
        public function getAll(){
            $array = array();
            $sql = "Select * from produto order by nome";
            $sql = $this->db->query($sql);
            if($sql->rowCount()>0){
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $array;
        }

        public function get($id_produto){
            $array = array();
            $sql = "Select * from produto where id_produto = :id_produto";
            $sql = $this->db->prepare($sql);
            $sql->bindvalue(":id_produto",$id_produto);
            $sql->execute();
            if($sql->rowCount()>0){
                $array = $sql->fetch(\PDO::FETCH_ASSOC);
            }
            return $array;
        }
    }