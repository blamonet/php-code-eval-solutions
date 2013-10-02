<?

Class cashRegister {
   public $change;
   public $remainder;
}

function testCurrency($money, $currency, $currency_value, $change) {
//     echo "TESTING $money with $currency \n";
     if ($money/$currency_value >= 1) {
       $ct = floor($money/$currency_value);
       $change += $ct;
       $money = round($money - $ct*$currency_value,2);
     }
     $cash_reg = new cashRegister();  
     $cash_reg->remainder = $money;
     $cash_reg->change = $change;
     return $cash_reg;
}

function change($money) {
  $change = 0;
  $remaining = $money;

  if ($money < 0) {
    return "ERROR";
  } elseif ($money == 0) {
    return "ZERO";
  } else {
     $cash_reg = testCurrency($money, 'FIVE', 5, 0);
     $cash_reg = testCurrency($cash_reg->remainder, 'THREE', 3, $cash_reg->change);
     $cash_reg = testCurrency($cash_reg->remainder, 'ONE', 1, $cash_reg->change);
  }
  $change = $cash_reg->change;
  return $change;
}



$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  if ($test != "") {
    echo change($test) . "\n";
  }
}
fclose($fh);
?>
