<?php
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $test = fgets($fh);
    $arr = explode("|", $test);
    $strarr = str_split($arr[0]);
    $nums = explode(' ', trim($arr[1]));
    $output = '';
    foreach($nums as $value){
        $output .= $strarr[intval($value)-1];
    }
    echo $output . "\n";
}

?>
