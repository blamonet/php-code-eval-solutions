<?php

function findTrailing($word, $pattern) {
   $p_len = strlen($pattern);
   $w_len = strlen($word);
   $w_start = $w_len-$p_len-1;

   if (substr($word, $w_len-$p_len, $p_len) == $pattern) {
      return 1;
   } else {
      return 0;
   }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  if ($test != null) {
     $args = explode(",", $test);
     echo findTrailing($args[0], $args[1]) . "\n";
  }
}
fclose($fh);
?>
