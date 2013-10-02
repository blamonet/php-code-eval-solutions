<?
   
function _detect_loop($arr, $size) {
  for ($i = 0; $i < strlen($arr); $i++) {
     if (substr_count($arr, substr($arr, $i, $size)) > 1) {
        return substr($arr, $i, $size);
     }
  }
  if ($size > 1) {
    return _detect_loop($arr, $size-1);
  }
}

function detect_loop($arr) {
  for ($i = 1; $i < strlen($arr); $i++) {
     return _detect_loop($arr, strlen($arr)-$i);
  }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $pattern = "";
  $test = trim(fgets($fh));
  if ($test != "") {
    $pattern = detect_loop($test);
    if ($pattern != "") {
       echo trim($pattern) . "\n";
    }
  }
}
fclose($fh);
?>
