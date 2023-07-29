<?php 
  require_once("../../conexão/conexao.php");

    //passo 3 
    $consulta_produtos = "select nomeproduto , precounitario, tempoentrega";
    $consulta_produtos .= " from produtos ";
    $consulta_produtos .= "where tempoentrega = 5";
    $produtos = mysqli_query($conecta, $consulta_produtos);

    if( !$produtos){
        die("Falha na consulta ao banco de dados");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
    </head>

    <body>
        <ol>
     <?php 
       while($registro = mysqli_fetch_assoc($produtos)){
        ?>
       <li><?php echo $registro["nomeproduto"] ?></li>


        <?php 
       }
       ?>
       </ol>
      <?php 
          mysqli_free_result($produtos);
      ?>

    </body>
</html>
<?php 
     mysqli_close($conecta);

?>

