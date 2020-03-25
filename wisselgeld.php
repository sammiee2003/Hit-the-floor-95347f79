<?php
$input = readline(" ");
$geld = array(10,5,2,1);

foreach ($geld as $value) {
    if ($input >= 1) {
        $rest = floor($input / $value);
        $input = $input - ($value * $rest);
        echo $rest . "x" . $value . "euro" . PHP_EOL;
    }
}
