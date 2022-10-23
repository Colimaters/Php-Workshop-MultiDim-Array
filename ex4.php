<?php

function run(array $pos, string $string): array
{
    //Ajoutez du code dans cette fonction
}

function main($argc, $argv)
{
    if ($argc != 3) {
        fwrite(STDERR, "Il doit y avoir 2 arguments");
        exit(1);
    }
    $result = run(json_decode($argv[1]), $argv[2]);
    print_r($result);
}

main($argc, $argv);