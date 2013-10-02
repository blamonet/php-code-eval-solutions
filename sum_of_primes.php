<?
$primes = array();
$is_prime = false;

for ($i = 2; $i<10000; $i++) {
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
        if (count($primes)==1000) {
               break;
                  }
}

echo array_sum($primes);

//print_r($primes);
?>
