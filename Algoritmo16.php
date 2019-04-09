<?php 

  print"digite o primeiro valor:";
        $valor1 =(float)fgets(STDIN);
        
  print"digite o segundo valor:";
        $valor2 =(float)fgets(STDIN);
        
  print"digite o terceiro valor:";
        $valor3 =(float)fgets(STDIN);
        
  print"digite o quarto valor:";
        $valor4 =(float)fgets(STDIN);
        
  print"digite o quinto valor:";
        $valor5 =(float)fgets(STDIN);
        
    $soma = ($valor1 + $valor2 + $valor3 + $valor4 + $valor5);
       $media=($soma/5);
         print"a média é: $media";
