<?php
# Estrutura de repetição
# Enquanto (while) - Enquanto a determinada condição for verdadeira, será testada antes da execução do bloco;

$i = 1;

while ($i <= 5){
    echo "Número: $i <br>";
    $i++;

}
#Exemplo 2
# Do...While (Faça...Enquanto) - A determinada condição é testada após a execução da declaração do bloco.

do {
    echo "Numero: $i <br>";
    $i++;

}while ($i <= 5);

?>