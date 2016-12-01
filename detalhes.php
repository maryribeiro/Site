<?php
require_once 'dao/DaoProduto.php';
$DaoProduto = DaoProduto::getInstance();
if (isset($_GET["id"])) {
   $id = $_GET["id"];
   $rowProduto = $DaoProduto->getProduto($id);
}
?>
<h2>Detalhes do Produto</h2>
<div style="float: left;">    
   <img src="http://127.0.0.1/crud/fotos/<?= $rowProduto["imagem"] ?>" alt="<?= $rowProduto["descricao"] ?>" width="400" height="300">
</div>   
<div style="float: left;text-align: center;padding: 10px;">
   <h3><?= $rowProduto["descricao"] ?></h3>
   <div ><?= $rowProduto["marca"] ?></div>
   <div>R$ <?= $rowProduto["preco"] ?></div>
</div>
