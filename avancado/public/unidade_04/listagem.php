<?php require_once("../../conexão/conexao.php"); ?>
<?php
  // Consulta ao banco de dados - produtoa
  $produtos = " select produtoID, nomeproduto, tempoentrega, precounitario, imagempequena";
  $produtos .= " from produtos ";
  $resultado = mysqli_query($conecta, $produtos);
  if(!$resultado){
    die("falha na consultar o banco ");
  }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">

    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main> 
            <div id="listagem_produtos" >
            <?php 
               while($linha = mysqli_fetch_assoc($resultado)){
            ?>

             <ul>
            <li class="imagem"><img src="<?php echo $linha["imagempequena"]?>"></li>
              <li><h3><?php echo $linha["nomeproduto"]?></h3></li>
              <li>Tempo entrega: <?php echo $linha["tempoentrega"]?></li>
              <li>Preço unitário: <?php echo real_format($linha["precounitario"])?></li>

            </ul>
            <?php
               }
            ?>
            </div>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>