<?

function isLittleEndian() {
    $testint = 0x00FF;
    $p = pack('S', $testint);
    return $testint===current(unpack('v', $p));
}

if (isLittleEndian() == 1) {
   echo "LittleEndian";
} else {
   echo "BigEndian";
};
?>
