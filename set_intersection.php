<?php
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = fgets($fh);
  $nums = explode(";",$test);
  $intercept = array_intersect(explode(",",$nums[0]),explode(",",$nums[1]));
  $intercept = implode(",",$intercept);
  echo $intercept . "\n";
}
fclose($fh);
?>
