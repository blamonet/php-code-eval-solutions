<?
$primes = array();
$is_prime = false;

for ($i = 2; $i<250; $i++) {
   $is_prime = true; // assumed true until proven otherwise
   for ($j = 2; $j<=($i/2); $j++) {
      if ($i%$j==0) {
        $is_prime = false;
        break;
      }
   }
   if ($is_prime) {
     array_push($primes,$i);
   }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  $found_primes = array();
  if ($test != "") {
    $ranges = explode(",",$test);
    for ($i = $ranges[0]; $i <= $ranges[1]; $i++) {
      for ($j = 0; $j < count($primes); $j++) {
        if ($primes[$j] == $i) {
           array_push($found_primes,$i);
        }
      }
    }
    echo count($found_primes) . "\n";
  }
}
fclose($fh);
?>
