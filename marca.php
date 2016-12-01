<?php
require_once 'dao/DaoMarca.php';
$DaoMarca = DaoMarca::getInstance();
$dadosMarcas = $DaoMarca->listar();
?>
<h2>Marcas</h2>
<?php
foreach ($dadosMarcas as $rowMarca) {
  echo "<div class='floating-box'><a href='?pg=produtos&marca={$rowMarca["id"]}'>{$rowMarca["descricao"]}</a></div>";
}
?>
