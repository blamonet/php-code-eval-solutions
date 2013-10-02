<?php
function beauty_value($str) {
   $str = preg_replace("/[^a-zA-Z]+/", "", $str);
   $arr = str_split(strtolower($str));
   $counts = array_count_values($arr);
   rsort($counts);
   $char_value = 26;
   for ($i = 0; $i < count($counts); $i++) {
     $sum = $sum + $char_value*$counts[$i];
     $char_value--;
   }
   return $sum;
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = fgets($fh);
  echo beauty_value($test) . "\n";
}
fclose($fh);
?>
