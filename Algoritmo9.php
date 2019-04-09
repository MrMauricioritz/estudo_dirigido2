<?php

print "primeiro valor:";
  $val1=(float)fgets(STDIN);

print "segundo valor:";
  $val2=(float)fgets(STDIN);

print "terceiro valor:";
  $val3=(float)fgets(STDIN);

if ($val1>$val2 and $val1>$val3 and $val2>$val3){
         print"$val1\n";
       print"$val2\n";
      print"$val3\n";
}
if ($val2>$val1 and $val2>$val3 and $val3>$val1){
          print"$val2\n";
        print"$val3\n";
       print"$val1\n";
}
if ($val3>$val1 and $val3>$val2 and $val2>$val1){
          print"$val3\n";
        print"$val2\n";
       print"$val1\n";
}
if ($val1>$val2 and $val1>$val3 and $val3>$val2){
         print"$val1\n";
       print"$val3\n";
      print"$val2\n";
}
if ($val2>$val1 and $val2>$val3 and $val1>$val3){
         print"$val2\n";
       print"$val1\n";
      print"$val3\n";
}
if ($val3>$val1 and $val3>$val2 and $val1>$val2){
          print"$val3\n";
        print"$val1\n";
      print"$val2\n";
}
