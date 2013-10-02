<?php
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $test = trim(fgets($fh));
      $word_array = str_word_count($test, 1);
      $new_word = "";
        for ($i=count($word_array)-1; $i>0-1; $i--) {
                $new_word .= $word_array[$i] . " ";
                  }
        echo trim($new_word) . "\n";
}
fclose($fh);
?>
