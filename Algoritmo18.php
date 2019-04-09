<?php

$valorimpar=0;

$valorpar=0;

$contagemdevezes=1;

do {print "digite um valor: ";
    
    $valor = (float)fgets(STDIN);
    
      if ($valor%2==0)
        {$valorpar++;}
          if ($valor%2!=0)
            {$valorimpar++;}  
    $contagemdevezes++;}  while($contagemdevezes<=10);
      print "quantidade de valores impar(es): $valorimpar\n quantidade de valores par(es): $valorpar";
