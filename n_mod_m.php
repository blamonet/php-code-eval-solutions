<?php
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = fgets($fh);
  $nums = explode(",",$test);
  $divides=(int)($nums[0]/$nums[1]);
  echo $nums[0]-$nums[1]*$divides . "\n";
}
fclose($fh);
?>
