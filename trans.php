<?php
$trans = array(
    array(4, 2,9),
    array(7, 6,3),
    array(9, 6,0)
);
echo "<h2> Matrix </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$trans[$row][$col];
  }
}
echo "<h2> Transpose of Matrix </h2>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";  
  for ($col = 0; $col < 3; $col++) {
    echo " ".$trans[$col][$row];
  }
  
}
?>