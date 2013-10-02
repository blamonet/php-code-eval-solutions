<?php
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $test = fgets($fh);
      echo strtolower($test);
}
fclose($fh);
?>
