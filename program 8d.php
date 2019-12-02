<?php 
$a1 = Array('0' => Array('0' => 3,'1' => 2),'1' => Array('0' => 4,'1' => 5));
$a2 = Array('0' => Array('0' => 7,'1' => 2),'1' => Array('0' => 5,'1' => 5));

$result = array();
for($i=0; $i<=1; $i++) {
    for($j=0; $j<=1; $j++) {
		$result[$i][$j]=0;
		for($k=0;$k<=1;$k++)
        $result[$i][$j] += $a1[$i][$k] * $a2[$k][$j];
    }
}

echo "<p> matrix Multiplication</p>";
echo "<pre/>";print_r($result);
?>
