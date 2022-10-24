<?php

function run(string $string): array
{
    $result = explode(' ', $string);

    for ($i = 0; $i < count($result); $i++) {
        $result[$i] = str_split($result[$i]);
    }
    return ($result);
}

function main($argc, $argv)
{
    if ($argc != 2) {
        fwrite(STDERR, "Il doit y avoir 1 argument");
        exit(1);
    }
    $result = run($argv[1]);
    print_r($result);
}

main($argc, $argv);