<?php
function sort_length($a,$b) {
  return strlen($b) - strlen($a);
}

$phrase_list = array();
$fh = fopen($argv[1], "r");

while (!feof($fh)) {
  $test = trim(fgets($fh));
  if ($test != "") {
    array_push($phrase_list,$test);
  }
}

usort($phrase_list,'sort_length');
foreach($phrase_list as $phrase) {
  echo $phrase . "\n";
}
fclose($fh);
?>
