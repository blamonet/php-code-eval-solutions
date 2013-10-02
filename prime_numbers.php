<?
$primes = array();
$is_prime = false;

for ($i = 2; $i<1000; $i++) {
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
  $found_primes = array();
  $test = trim(fgets($fh));
  if ($test != "") {
     for ($i = 0; $i < $test; $i++) {
        for ($j = 0; $j < count($primes); $j++) {
           if ($primes[$j] > $test) {
             break;
           }
           if ($i == $primes[$j]) {
             array_push($found_primes, $i);
           }
        }
     }
  }
  echo implode(",",$found_primes) . "\n";
}
fclose($fh);
?>
