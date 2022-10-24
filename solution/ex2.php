<?php

function run(string $string): array
{
    $result = array();
    $tmp = "";
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] == " ") {
            array_push($result, $tmp);
            $tmp = "";
        } else  {
            $tmp .= $string[$i];
        }
    }
    if (strlen($tmp) != 0)
        array_push($result, $tmp);
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
?>