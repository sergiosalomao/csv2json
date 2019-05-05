<?php

#Script para leitura de arquivo CSV transformar em json
$handle = fopen("arquivo.csv", "r");
$row = 0;
while ($line = fgetcsv($handle, 1000, ";")) {
    if ($row++ == 0) {
            continue;
        }

    $dados[] =
        [
            'id' => $line[0],
            'nome' => $line[1],
            'telefone' => $line[2],
            'endereco' => $line[3],
            //'json' => $line[4]
         ];
    }
echo $json = json_encode($dados);
fclose($handle);




