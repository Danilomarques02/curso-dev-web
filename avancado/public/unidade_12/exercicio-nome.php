<?php

   $alfabeto = "ASDFGHJKLÇZXCVBNMQWERTYUIOP1234567890";
   $tamanho = 12;
   $letra   = "";
   $resultado ="";

   for ($i = 1 ; $i <= $tamanho ; $i ++){
   echo substr($alfabeto, rand(0, strlen($alfabeto)-1) , 1);
   $resultado .= $letra;
   }

   $agora = getdate();
   $codigo_ano = $agora["year"] . "_" . $agora["yday"];
   $codigo_data = $agora["hours"] . $agora["minutes"] . $agora["seconds"];

   echo $resultado . "_" . $codigo_ano . "_" . $codigo_data;

   ?>
