<?php
#Estrutura de repetição
#Foreach (Para dentro de vetores e matrizes)

$times = ["Flamengo", "Palmeiras","Santos","São Paulo","Vasco", "Botafogo","Corintians"];

foreach ($times as $time){
    echo "Time da Série A: $time <br>";
}

#Exemplo 2
#$dicionario = ["chave" => valor,] 
$alunos = ["Ana" => 9, "Carlos"=> 7, "Beatriz" => 10];
$alunos += ["Lucas" => 8];

foreach ($alunos as $nome => $nota){
    echo "$nome tirou a nota $nota <br>";
}



?>