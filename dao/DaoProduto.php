
<?php

require_once 'Conexao.php';

class DaoProduto {

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoProduto();
        return self::$instance;
    }
   
    public function listar() {
        $sql = "SELECT produto.id,"
                . " produto.descricao,"
                . " produto.preco,"
                . " produto.imagem,"
                . " marca.descricao as marca"
                . " FROM produto, marca"
                . " WHERE produto.marca_id = marca.id "
                . " ORDER BY produto.descricao";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function listarHome() {
        $sql = "SELECT produto.id,"
                . " produto.descricao,"
                . " produto.preco,"
                . " produto.imagem,"
                . " marca.descricao as marca"
                . " FROM produto, marca"
                . " WHERE produto.marca_id = marca.id "
                . "   AND produto.destaque = 1"
                . " ORDER BY produto.descricao";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduto($id) {
        $sql = "SELECT produto.id,"
                . " produto.descricao,"
                . " produto.preco,"
                . " produto.imagem,"
. " marca.descricao as marca"
               . " FROM produto, marca"
               . " WHERE produto.marca_id = marca.id"
               . " AND produto.id =:id "
               . " ORDER BY produto.descricao";

       $p_sql = Conexao::getInstance()->prepare($sql);
       $p_sql->bindValue(":id", $id);
       $p_sql->execute();
       return $p_sql->fetch(PDO::FETCH_ASSOC);
   }
   
   public function getVeiculoMarca($id) {
       $sql = "SELECT produto.id,"
               . " produto.descricao,"
               . "produto.preco,"
               . "produto.imagem,"
               . " marca.descricao as marca"
               . " FROM produto, marca"
               . " WHERE produto.marca_id = marca.id"
               . " AND marca.id =:id "
               . " ORDER BY produto.descricao";

       $p_sql = Conexao::getInstance()->prepare($sql);
       $p_sql->bindValue(":id", $id);
       $p_sql->execute();
       return $p_sql->fetchAll(PDO::FETCH_ASSOC);
   }
   

}