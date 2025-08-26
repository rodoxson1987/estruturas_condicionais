

<?php 
    # Estrutura de Condição 
    # if - Executa um código se uma condição for verdadeira
    
    $idade = 16;
    $cont = 0;

    #Exemplo 1 - Condição é verificar se a idade é maior ou igual a 18, 
    #se a condição for verdadeira executa o comando da linha 9.

    # Exemplo 2 - permite verificar se o bloco de condição é verdadeira, caso contrário, deve apresentar o resultado falso da linha 14.

    if ($idade >= 18) {
        echo "Você é maior de idade.";
    } else {
        echo "Você é menor de idade.";
    }
    
?>