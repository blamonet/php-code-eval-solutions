<?

function isJolly($nums) {
   $diffs = array();
   for ($i = 2; $i < count($nums); $i++) {
      $difference = abs($nums[$i] - $nums[$i-1]);
      if (abs($difference) < 1 || $difference > $nums[0]) {
        return "Not jolly";
      }
      array_push($diffs, $difference);
   }

   if (count($diffs) != $nums[0]-1) {
      return "Not jolly";
   }   
   if (count($diffs) == count(array_unique($diffs))) {
      return "Jolly";
   } else {
      return "Not jolly";
   }
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  if ($test != "") {
     $nums = explode(" ", $test);
     echo isJolly($nums) . "\n";
  }
  
}
fclose($fh);
?>
