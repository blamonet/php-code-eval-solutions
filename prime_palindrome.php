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

for ($i=count($primes)-1; $i>0; $i--) {
  if ($primes[$i] == strrev($primes[$i])) {
    echo $primes[$i];
    break;
  }
}
?>
