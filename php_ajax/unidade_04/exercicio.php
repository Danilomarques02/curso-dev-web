<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
    <link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
    <button id="botão">carregar</button>
    <div id="listagem"></div>
    <script src="jquery.js"></script>
    <script>
        $('button#botão').click(function () {
            $('div#listagem').css('display','block');
            carregarDados();
        });

        function carregarDados() {
            $.ajax({
                url: '_xml/produtos.xml'
            }).then(sucesso, falha);

            function sucesso(arquivo) {
                var elemento;
                elemento = "<ul>";
                $(arquivo).find('produto').each(function () {
                    var nome = $(this).find('nomeproduto').text();
                    var preco = $(this).find('precounitario').text();
                    elemento += "<li class='name'>" + nome + "</li>";
                    elemento += "<li class='preco'>" + preco + "</li>";

                });

                elemento += "</ul>";
                $('div#listagem').html(elemento);
            }

            function falha() {

            }
        }
    </script>
</body>
</html>
