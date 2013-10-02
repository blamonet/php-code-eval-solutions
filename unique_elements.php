<?php
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = fgets($fh);
  $nums = explode(",",trim($test));
  $nums_unique = array_values(array_unique($nums));
  for ($i = 0; $i < count($nums_unique); $i++) {
    echo $nums_unique[$i];
    if ($i < count($nums_unique)-1) {
       echo ",";
    }
  }
  echo "\n";
}
fclose($fh);
?>
