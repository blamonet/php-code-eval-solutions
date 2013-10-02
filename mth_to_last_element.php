<?php
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  $arr = explode(" ", $test);
  $arr = array_reverse($arr);
  if ($arr[0] <= count($arr)) {
    echo $arr[$arr[0]]  . "\n";
  }
}
fclose($fh);
?>
