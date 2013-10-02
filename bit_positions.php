<?php
function bit_position_test($num, $pos1, $pos2) {
   $pos1--;
   $pos2--;
   $bin_num = strrev(decbin($num));
   if ($bin_num[$pos1] == $bin_num[$pos2]) {
     return "true";
   } else {
     return "false";
   }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = fgets($fh);
  $nums = explode(",",$test);
  echo bit_position_test($nums[0], $nums[1], trim($nums[2])) . "\n";
}
fclose($fh);
?>
