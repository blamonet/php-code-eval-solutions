<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = fgets($fh);
  $bin = decbin($test);
  echo substr_count($bin,"1") . "\n";
}
fclose($fh);
?>
