<?php 

       print "digite o primeiro valor:";
   $val1 = (float) fgets(STDIN);
    
      print "digite o segundo valor:";
   $val2 = (float) fgets(STDIN);
    
      print "digite o terceiro valor: ";
   $val3 = (float) fgets(STDIN);
    
    if ($val1 > $val2 && $val1 > $val3){
        print "valor um é o maior \n ";
    }
    elseif ($val2 > $val1 && $val2 > $val3){
        print "valor dois é o maior \n";
    }
    else{
        print "valor tres é o maior \n";
    }
    // ~ ~ ~ ~ ~ ~ ~ ~ ~ MENOR ~ ~ ~ ~ ~ ~ ~ ~ 
    
    if ($val1 < $val2 && $val1 < $val3){
        print "valor um é o MENOR";}
    elseif ($val2 <$val1 && $val2 < $val3){
        print "valor dois é o MENOR";
    }
    else {
        print "valor tres é o MENOR";
    }
