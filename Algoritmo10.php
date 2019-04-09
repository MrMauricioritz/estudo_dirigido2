<?php

print"insira um número para A:";
  $A = fgets(STDIN);
if ($A==0){
    print"A não pode ser 0 \n";
    exit;
}
print"insira um número para B:";
  $B = fgets(STDIN);

print"insira um número para C:";
  $C = fgets(STDIN);

    $delta = (pow($B,2))-(4*$A*$C);
if($delta < 0){
    print"delta é negativo: não tem raízes reais";
    exit;
}
elseif ($delta==0){
        $X = -$B/2*$A;
    print "o número para A é: $A";
      print "o número para B é: $B";
        print "o número para C é: $C";
          print "o número para Δ é: $delta\n";
            print "o número para x é: $X\n";
}
elseif ($delta > 0) {
        $X1 = (-$B-sqrt($delta))/2*$A;
        $X2 = (-$B+sqrt($delta))/2*$A;
        
    print "o número para A é: $A";
      print "o número para B é: $B";
         print "o número para C é: $C";
            print "o número para Δ é: $delta\n";
               print "o número para x1 é: $X1\n";
                 print "o número para x2 é: $X2\n";    
}
