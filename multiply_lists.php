<?php

function multi($var){
    $arr = explode('|',$var);
    $a = explode(' ',trim($arr[0]));
    $b = explode(' ',trim($arr[1]));
    foreach($a as $key=>$value){
        $output[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$output);
}

$fh = fopen($argv[1], "r");

while (!feof($fh)) {
    $test = fgets($fh);
    echo  multi($test). "\n";
}

?>
