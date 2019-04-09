<?php

print "digite o preço do primeiro produto:";
      $pre1 = (float) fgets(STDIN);
     
print "digite o preço do segundo produto:";
      $pre2 = (float) fgets(STDIN);
    
print "digite o preço do terceiro produto:";
       $pre3 = (float) fgets(STDIN);
    
if ($pre1 < $pre2 && $pre1 < $pre3){
    print "compre o primeiro produto!";}
    
elseif ($pre2 <$pre1 && $pre2 < $pre3){
    print "compre o segundo produto!";
}
else {
    print "compre o terceiro produto!";
}
