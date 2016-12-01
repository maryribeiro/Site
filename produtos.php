<?php
require_once 'dao/DaoProduto.php';
$DaoProduto = DaoProduto::getInstance();
if (isset($_GET["marca"])) {
   $marca = $_GET["marca"];
   $dadosProdutos = $DaoProduto->getProdutoMarca($marca);
} else {
   $dadosProdutos = $DaoProduto->listar();
}
?>
<h2>PRODUTOS</h2>
<?php
foreach ($dadosProdutos as $rowProduto) {
   ?>
   <div class="img">
       <a href="?pg=detalhes&id=<?=$rowProduto["id"]?>">
           <img src="http://127.0.0.1/crud/fotos/<?=$rowProduto["imagem"]?>" alt="<?=$rowProduto["descricao"]?>" width="300" height="200">
       </a>
       <div class="desc"><?=$rowProduto["descricao"]?></div>
       <div class="desc"><?=$rowProduto["marca"]?></div>
       <div class="desc">R$ <?=$rowProduto["preco"]?></div>
   </div>

   <?php
}
?>


<div class="promocao">
   <div class="img">
       <a href="#">
           <img src="img/comp.jpg" width="300" height="200"/>
       </a>
       <div class="desc">
           Computador <br>
           R$ 1.999,00
       </div>
   </div>
   </div>
   
   
   <!-- 2 PRODUTO -->
  
   <div class="promocao">
   <div class="img">
       <a href="#">
           <img src="img/49505.jpg" width="300" height="200"/>
       </a>
       <div class="desc">
          Tablet <br>
           R$ 300,00
       </div>
   </div>
   </div>
   
    <!-- 3 PRODUTO -->
     <div class="promocao">
   <div class="img">
       <a href="#">
           <img src="img/47959.jpg" width="300" height="200"/>
       </a>
       <div class="desc">
          Tablets <br>
           R$ 400,00
       </div>
   </div>
   </div>
    
   
    