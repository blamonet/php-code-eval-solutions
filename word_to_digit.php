<?php
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $test = fgets($fh);
    $arr = explode(';',$test);
    $output = '';
    foreach($arr as $value){
        switch(trim($value)){
            case 'zero':
                $output .= '0';
                break;
            case 'one':
                $output .= '1';
                break;
            case 'two':
                $output .= '2';
                break;
            case 'three':
                $output .= '3';
                break;
            case 'four':
                $output .= '4';
                break;
            case 'five':
                $output .= '5';
                break;
            case 'six':
                $output .= '6';
                break;
            case 'seven':
                $output .= '7';
                break;
            case 'eight':
                $output .= '8';
                break;
            case 'nine':
                $output .= '9';
                break;    
        }
    }
    echo $output . "\n";
}

?>
