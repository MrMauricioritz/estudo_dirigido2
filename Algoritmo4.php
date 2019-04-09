<?php

print "digite uma letra:";

  $letra = fgetc(STDIN);
  
if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o"  or $letra == "u" or $letra == "A" or $letra == "E" or $letra == "I" or $letra == "O" or $letra == "U") {
    print "a $letra é uma vogal \n";
}
elseif ($Lltra == "k" or $letra == "c" or $letra == "g" or $letra == "f" or $letra == "d" or $letra == "h" or $letra == "j" or $letra == "b" or $letra == "l" or $letra == "m" or $Letra == "n" or $Letra == "p" or $Letra == "q" or $Letra == "r" or $Letra == "s" or $Letra == "t" or $Letra == "v" or $Letra == "w" or $Letra == "x" or $Letra == "y" or $Letra == "z" or $Letra == "B" or $Letra == "C" or $Letra == "D" or $Letra == "F" or $Letra == "G" or $Letra == "H" or $Letra == "J" or $Letra == "K" or $Letra == "L" or $Letra == "M" or $Letra == "N" or $Letra == "P" or $Letra == "Q" or $Letra == "R" or $Letra == "S" or $Letra == "T" or $Letra == "V" or $Letra == "W" or $Letra == "X" or $Letra == "Y" or $Letra == "Z") {
    print "a $letra é uma consoante \n";
}
else{
    print "isto não é um número ou caractere válido";
}
