<?php

    print "digite um valor: ";
    
         $valor = fgets (STDIN);
    if ($valor > 0) {
        print "o valor desejado é positivo ";
    }
        elseif ($valor < 0) {
    
        print "o valor é negativo " ;
    }
    else {
        print "o valor é igual a zero" ;
    }
