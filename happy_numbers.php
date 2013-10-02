<?php
function happy_number($num,$times) {
  $num = trim((string)$num);
  // fail after 1000 bad happy number checks
  if ($times > 1000) {
    return 0;
  }
  $sum = 0;
  for ($i = 0; $i < strlen($num); $i++) {
    $sum = $sum + pow($num{$i},2);
  }
  if ($sum == "1") {
    return $sum;
  } else {
    return happy_number($sum,$times+1);
  }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = fgets($fh);
  echo happy_number(trim($test),0) . "\n";
}
fclose($fh);
?>
