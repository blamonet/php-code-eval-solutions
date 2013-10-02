<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  if (filter_var($test, FILTER_VALIDATE_EMAIL)) {
    echo "true" . "\n";
  } else {
    echo "false" . "\n";
  }
}
fclose($fh);
?>
