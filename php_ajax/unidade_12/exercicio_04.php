<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>

        <script src="_js/jquery.js"></script>
        <script>
            $.ajax({
                type:"GET",
                url:"http://api.openweathermap.org/data/2.5/weather?q=Sao+Paulo,London&appid=pt",
                async:false
                    }).done(function(data){
                        console.log(data);
                    }).fail(function(){
                        console.log("falha");
                    });


        </script>
    </body>
</html>