<?php require_once("../../conexão/conexao.php"); ?>


<?php
    // criar inicialização da variavel de sessão.

    session_start();

    if(isset($SESSION["usuario"])){
        header("Location: pagina1.php");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main>
            <?php 
            echo $_SESSION["usuario"];
            ?>
        <p>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>