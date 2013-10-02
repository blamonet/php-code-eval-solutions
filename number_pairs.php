<?

function findPairs($nums, $sum) {
  $pairs = "";
  for ($i = 0; $i <= count($nums); $i++) {
     for ($j = $i + 1; $j < count($nums); $j++) {
        if ($nums[$i] + $nums[$j] == (int)$sum) {
           $pairs .= $nums[$i] . "," . $nums[$j] . ";";
        }
     }
  }
  return $pairs;
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $pairs = "";
  $test = trim(fgets($fh));
  if ($test != "") {
    $args = explode(";", $test);
    $nums = explode(",", $args[0]);
    $pairs =  findPairs($nums, $args[1]);
    if ($pairs != "") {
      echo substr($pairs, 0, strlen($pairs)-1) . "\n";
    } else {
      echo "NULL\n";
    }
  }
  
}
fclose($fh);
?>
