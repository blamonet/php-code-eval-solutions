<?
// still a little messed up...
function find_squares($num) {
  $ct=0;
  $max=sqrt($num)+1;
  $i=0;
  $squares = array();
  while ($i <= $max) {
       $remainder=$num-($i*$i);
       if (sqrt($remainder) == (int)sqrt($remainder)) {
//          echo "for $num - $i " . sqrt($remainder) . "\n"; 
            $found = false;
            for ($j = 0; $j < count($squares); $j++) {
              if ($i == $squares[$j] || sqrt($remainder) == $squares[$j]) {
                 $found = true;
                 break;
              }
            }
            if (!$found) {
              $ct++;
              array_push($squares, $i);
              array_push($squares, sqrt($remainder));
            }
          }
       $i++;
  }
return $ct;
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  if ($test != "") {
    echo find_squares($test) . "\n";
  }
}
fclose($fh);
?>
