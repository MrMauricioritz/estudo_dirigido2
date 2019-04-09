<?php
   
    print "digite uma letra:";
       $sexo = (string) fgets (STDIN);
       
    $mulher = 'M';
    $homem = 'H';
    
    if ((strcasecmp($sexo, $homem)) ==2)
    
    {print "sexo masculino";
    exit;}
    
    if ((strcasecmp($sexo, $mulher))!=-7 and (strcasecmp($sexo, $mulher)) ==2)
    
  {print "sexo feminino";}
  
   else  {print "sexo não é válido";}
