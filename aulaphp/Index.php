<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/IMG_2.png" type="image/x-icon">
    <title>EG no trabalo</title>
<link rel="stylesheet" href="css/estilo.css">


</head>
<body>

<div id="conteudo">
<header class="cabecalho">
  <div class="topo-header">
    <div class="logotipo">
      <img src="imagens/logo.png" width="190" alt="Logo">
    </div>

    <div class="sala-cliente">
      <div class="perfil">
        <img src="imagens/perfil.png" width="25" alt="Perfil">
      </div>
      <div class="carrinho">
        <img src="imagens/carrinho.png" width="25" alt="Carrinho">
      </div>
    </div>
  </div>

  <div class="search-container">
    <input type="text" class="search-input" placeholder="Pesquisar...">
    <button class="search-button">🔍</button>
  </div>
</header>
<div class="pagina-destaque">
<div class="destaque">
⁴4444444444
</div>
<main>

<?php
$dadosJson = file_get_contents('produto/produtos.json');
$produtos = json_decode($dadosJson, true);
foreach ($produtos as $produto) {

?>
    
 <div class="caixa-produto">
    <div class="item foto-produto">
      <img src="<?php echo $produto['imagem']; ?>" alt="Foto">
    </div>
    <div class="item estoque">Estoque</div>
    <div class="item quantidade"><?php echo $produto['quantidade'];?></div>
    <div class="item nome"><?php echo $produto['nome'];?></div>
    <div class="item frete"><?php echo $produto['frete'];?></div>
    <div class="item comentario"><?php echo $produto['comentario'];?></div>
  </div>


<?php
}
?>

</main>
</div>

</div>
</body>
</html>
