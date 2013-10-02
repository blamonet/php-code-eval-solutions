<?php
function nvl($num,$default) {
  if ($num > 0) {
    return $num;
  } else {
    return $default;
  }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = fgets($fh);
  $phrase = explode(",",$test);
  if (trim($phrase[0]) != "") {
    echo nvl(strrpos(trim($phrase[0]),trim($phrase[1])),-1);
    echo "\n";
  }
}
fclose($fh);
?>
