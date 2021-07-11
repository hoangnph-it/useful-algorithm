<?php
//Find subarray with maximum value

// Main program
$length = 3;

$test_array_1 = array(2, 0, 11, 3, 0 );
print_r(findSubArray($test_array_1, $length));
echo ("\xA");

$test_array_2 = array(1, -5, 4, 3, 6, 8, 2, 4);
print_r(findSubArray($test_array_2, $length));
echo ("\xA");

$test_array_3 = array(1, -5);
print_r(findSubArray($test_array_3, $length));
echo ("\xA");

$test_array_3 = array(1);
print_r(findSubArray($test_array_3, $length));
echo ("\xA");

function findSubArray($array, $length) {
    echo '*********';
    echo ("\xA");

    if (sizeof($array) < $length) {
        return array('Invalid data');
    }
    else {
        $subArray = array_slice($array, 0, 3, true);
        $maxValue = array_sum($subArray);

        for ($i = 1; $i <= sizeof($array); $i++) {
            
            if ($i + $length <= sizeof($array)) {
                $sum = 0;
                for ($j = $i; $j < $i + $length; $j++) {
                    $sum = $sum + $array[$j];
                }
                
                if ($sum > $maxValue) {
                    $maxValue = $sum;
                    $subArray = array_slice($array, $i, 3, true);
                }
            }
        }
        return $subArray;
    }
}
?>
