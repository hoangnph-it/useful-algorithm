<?php
// Check the k(th) min of an array
$arrayInput = array(1,5,4,12,6,7,9,8);
$k = 3;

asort($arrayInput, SORT_NUMERIC);
print_r(array_slice($arrayInput, $k - 1, 1, true));

?>
