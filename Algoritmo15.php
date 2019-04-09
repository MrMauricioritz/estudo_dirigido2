<?php
  print "digite o primeiro numero:";
    $number1= (float) fgets(STDIN);

  print "digite o segundo numero:";
    $number2= (float) fgets(STDIN);

  print "digite o terceiro numero:";
    $number3= (float) fgets(STDIN);

  print "digite o quarto numero:";
    $number4= (float) fgets(STDIN);

  print "digite o quinto numero:";
    $number5= (float) fgets(STDIN);

//determinando o maior//

  if ($number1>$number2 && $number1>$number3 && $number1>$number4 && $number1>$number5) 
    {print "o primeiro numero é o maior\n";}
    if ($number2>$number1 && $number2>$number3 && $number2>$number4 && $number2>$number5) 
    {print "o segundo numero é o maior\n";}
      if ($number3>$number1 && $number3>$number2 && $number3>$number4 && $number3>$number5) 
    {print "o terceiro numero é o maior\n";}
        if ($number4>$number1 && $number4>$number2 && $number4>$number3 && $number3>$number5) 
    {print "o quarto número é o maior\n";}
          if ($number5>$number1 && $number5>$number2 && $number5>$number3 && $number5>$number4) 
    {print "o quinto número é o maior\n";}
