<?php
function fibonacci($num) {
  $a = $num - 1;
  $b = $num - 2;
  if ($num >= 2) {
    return fibonacci($a) + fibonacci($b);
  } elseif ($num == 1) {
    return 1;
  } else {
    return 0;
  }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $num = fgets($fh);
  echo fibonacci($num) . "\n";
}
fclose($fh);
?>
