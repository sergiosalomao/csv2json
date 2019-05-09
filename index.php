<?php
#Script para leitura de arquivo CSV transformar em json
$handle = fopen("apreensoes_para_regularizar.csv", "r");
$row = 0;

#Definir inicio e fim da leitura
$inicio = 1300;
$fim =1335;

while ($line = fgetcsv($handle, 1000, ",")) {
    if ($row++ == 0) {
        continue;
    }

    if (($row >= $inicio) && ($row <= $fim)) {
        $dados[] =
            [
                'numero_apreensao' => $line[0],
                'numero_leilao' => $line[5],
                'data_leilao' => $line[6],
                'numero_lote' => $line[7],
                'classificacao' => $line[8]
            ];
    }
}

echo $json = json_encode($dados);
fclose($handle);