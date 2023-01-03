<?php

function run(string $string)
{
    //Ajoutez du code dans cette fonction
}

function main($argc, $argv): void
{
    if ($argc != 2) {
        fwrite(STDERR, "Il doit y avoir 1 argument");
        exit(1);
    }
    $result = run($argv[1]);
    print_r($result);
}

main($argc, $argv);

?>