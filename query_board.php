<?php

$size = 255;
$board = array_fill(0, $size, array_fill(0, $size, "0"));

function printBoard($board, $size) {
    for ($i = 0; $i <= $size; $i++) {
       for ($j = 0; $j <= $size; $j++) {
          echo $board[$i][$j];
       }
       echo "\n";
    }
}

function setRow($board, $row, $value, $size) {
    for ($i = 0; $i <= $size; $i++) {
       $board[$row][$i] = $value;
    }
    return $board;
}

function setCol($board, $col, $value, $size) {
    for ($i = 0; $i <= $size; $i++) {
       $board[$i][$col] = $value;
    }
    return $board;
}

function queryRow($board, $row, $size) {
    $sum = 0;
    for ($i = 0; $i <= $size; $i++) {
       $sum += $board[$row][$i];
    }
    return $sum;
}

function queryCol($board, $col, $size) {
    $sum = 0;
    for ($i = 0; $i <= $size; $i++) {
       $sum += $board[$i][$col];
    }
    return $sum;
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = fgets($fh);
  $command = explode(" ", $test);
  if ($command[0] == "SetCol") {
     $board = setCol($board,$command[1],trim($command[2]),$size);
  } 
  if ($command[0] == "SetRow") {
     $board = setRow($board,$command[1],trim($command[2]),$size);
  }
  if ($command[0] == "QueryRow") {
     echo queryRow($board,trim($command[1]),$size) . "\n";
  }
  if ($command[0] == "QueryCol") {
     echo queryCol($board,trim($command[1]),$size) . "\n";
  }

}
fclose($fh);
?>
