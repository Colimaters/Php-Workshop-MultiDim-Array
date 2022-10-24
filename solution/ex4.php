<?php

function action(array $result, int $pos1, int $pos2): array
{
    if ($pos1 >= count($result) || $pos2 >= count($result)) {
        fwrite(STDERR, "L'une des positions demandées est supérieur à la longueur du tableau");
        exit(1);
    }
    [$result[$pos1], $result[$pos2]] = [$result[$pos2], $result[$pos1]];
    array_unshift($result[$pos1], "@");
    array_unshift($result[$pos2], "@");
    return ($result);
}

function run(array $pos, string $string): array
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
    $result = action($result, $pos[0], $pos[1]);
    return ($result);
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