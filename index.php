<?php
function findMin($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function findMax($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

$nums = [];
for ($i = 0; $i < 100; $i++) {
    $nums[$i] = rand(1, 200);
}
foreach ($nums as $value) {
    echo $value." ";
}
$minValue = findMin($nums);
echo "<br>";
echo "min array is " . $minValue;
$maxValue=findMax($nums);
echo "<br>";
echo "max array is ".$maxValue;
