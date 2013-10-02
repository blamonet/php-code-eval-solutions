<?php

function findUnique($word) {
  $chr = null;
  for ($i = 0; $i <= strlen($word); $i++) {
     if (substr_count($word, substr($word, $i, 1)) == 1) {
        return substr($word, $i, 1);
     }
  }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  if ($test != null) {
     echo findUnique($test) . "\n";
  }
}
fclose($fh);
?>
