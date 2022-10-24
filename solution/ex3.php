<?php

function run(string $string): array
{
    $result = array();
    $count_row = 0;

    array_push($result, array());
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] == " ") {
            $count_row++;
            array_push($result, array());
        } else  {
            array_push($result[$count_row], $string[$i]);
        }
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