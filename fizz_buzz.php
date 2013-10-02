<?php
function fizz_buzz($number, $fizz, $buzz) {
  if ($number%$fizz==0 && $number%$buzz==0) {
    return "FB";
  } elseif ($number%$fizz==0) {
    return "F";
  } elseif ($number%$buzz==0) {
    return "B";
  } else {
    return $number;
  }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  $game_result="";
  $game_set = explode(" ", $test);
  for ($i=1; $i<$game_set[count($game_set)-1]+1; $i++) {
    $game_result .= fizz_buzz($i, $game_set[0], $game_set[1]) . " ";
  }
  echo trim($game_result) . "\n";
}
fclose($fh);
?>
