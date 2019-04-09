<?php

print "digite a nota número 1:";

  $nota1= (float) fgets(STDIN);
print "digite a nota número 2:";

  $nota2= (float) fgets(STDIN);
print "digite a média necessária:";

     $medianecessa= (float) fgets(STDIN);
   $media = ($nota1+$nota2)/2;
  $media= round($media,2);
 $notanecessa= $medianecessa-$media;

if ($media>=$medianecessa && $media!=10)
    {print "aluno aprovado(a) - média: $media; média necessária: $medianecessa";}
if ($media<$medianecessa)
    {print "aluno(a) reprovado(a) - média: $media; média necessária: $medianecessa; precisando de: $notanecessa pontos para ser aprovado(a)";}
if ($media==10)
    {print "aluno(a) aprovado(a) com distinção - média: $media; média necessária: $medianecessa";}
