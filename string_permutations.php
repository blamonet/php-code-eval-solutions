<?php

function string_perms($str) {
    if (strlen($str) == 1) {
      return array($str);
    }
    $permutations = array();
    $tail = substr($str, 1);
    foreach (string_perms($tail) as $permutation) {
        for ($i = 0; $i <= strlen($permutation); $i++) {
            $permutations[] = substr($permutation, 0, $i) .  $str[0] . substr($permutation, $i);
        }
    }
    return $permutations;
}

$phrase_list = array();
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  if ($test != "") {
    $sort_array = array_unique(string_perms($test));
    sort($sort_array);
    echo implode(",",$sort_array) . "\n";
  }
}
fclose($fh);
?>
