<?php
$conecta = mysqli_connect("localhost", "root", "", "andes");

if (mysqli_connect_error()) {
    die("Conexão falhou: " . mysqli_connect_error());
}

mysqli_set_charset($conecta, "utf8");

if (isset($_POST["nometransportadora"])) {
    $nome     = $_POST["nometransportadora"];
    $endereco = $_POST["endereco"];
    $cidade   = $_POST["cidade"];
    $estado   = $_POST["estados"];

    $inserir = "INSERT INTO transportadoras ";
    $inserir .= "(nometransportadora, endereco, cidade, estadoID) ";
    $inserir .= "VALUES ";
    $inserir .= "('$nome', '$endereco', '$cidade', $estado)";  

    $operacao_insercao = mysqli_query($conecta, $inserir);
    if ($operacao_insercao) {
        $retorno["sucesso"] = true;
        $retorno["mensagem"] = "Transportadora inserida com sucesso.";
    } else {
        $retorno["sucesso"] = false;
        $retorno["mensagem"] = "Falha no sistema, tente mais tarde.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Transportadora</title>
</head>
<body>
    <h1>Formulário de Transportadora</h1>
    <?php if (isset($retorno)) { ?>
        <p><?php echo $retorno["mensagem"]; ?></p>
    <?php } ?>
    <form method="post" action="">
        <label for="nometransportadora">Nome:</label>
        <input type="text" name="nometransportadora" id="nometransportadora" required><br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" required><br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" required><br>

        <label for="estados">Estado:</label>
        <select name="estados" id="estados" required>
            <option value="1">Estado 1</option>
            <option value="2">Estado 2</option>
            <!-- Adicione mais opções conforme necessário -->
        </select><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
