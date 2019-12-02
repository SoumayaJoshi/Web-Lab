<?php 
$a1 = Array('0' => Array('0' => 14,'1' => 2),'1' => Array('0' => 7,'1' => 5));
$a2 = Array('0' => Array('0' => 11,'1' => 2),'1' => Array('0' => 5,'1' => 5));

$result = array();
for($i=0; $i<=1; $i++) {
    for($j=0; $j<=1; $j++) {
        $result[$i][$j] = $a1[$i][$j] + $a2[$i][$j];
    }
}
echo "<p> matrix one </p>";
echo "<pre/>";print_r($a1);
echo "<p> matrix Two</p>";
echo "<pre/>";print_r($a2);
echo "<p> matrix Addition</p>";
echo "<pre/>";print_r($result);
?>
