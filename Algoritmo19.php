<?php

  print "deseja Fibonacciar? até onde?";
$fibonacciando= (float)fgets(STDIN);

  print"(o valor talvez ultrapasse o digitado)\n";
sleep (1); //usado para deixar mais devagar//

$fibonacci=0;
$fibonaccinovo=1;

  print "$fibonacci $fibonaccinovo ";
while ($fibonacciMAISnovoA<$fibonacciando)

    {$fibonacciMAISnovo=$fibonacci+$fibonaccinovo;
  print "$fibonacciMAISnovoainda";
     $fibonacci= $fibonaccinovo;
     $fibonaccinovo= $fibonacciMAISnovoainda;}
