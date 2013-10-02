<?
$alpha = array();
for ($i = 97; $i < 97+26; $i++) {
   array_push($alpha,chr($i));
}
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $unique = "";
  $test = trim(fgets($fh));
  if ($test != "") {
      $test_arr = str_split(strtolower($test));
      $result = array_merge($alpha,$test_arr);
      $result_ct = array_count_values($result);
      foreach ($result_ct as $key => $letter_ct) {
         if ($letter_ct == 1) {
           if (preg_match("/^[a-z]$/",$key) > 0) {
             $unique .= $key;
           }
         }
      }
  if ($unique == "") {
    echo "NULL";
  } else {
    echo $unique;
  }
  echo "\n";
  }
}
fclose($fh);
?>
