<?php
$a = 15;
$b = 7;
echo (" Sum: " . $a + $b . "\n");
echo ("Difference: " . $a - $b . "\n");
echo ("Product: " . $a * $b . "\n");
echo ("Quotient: " . $a / $b . "\n");

$number =10;

if ($number / 2) {
echo "number is even" . "\n";
} else {
echo "number is odd" . "\n";
}

if ($number < 0) {
echo "number is negative" . "\n";
} elseif ($number > 1) {
echo "number is positive" . "\n";
} else {
echo "number is zero" . "\n";
}

$a = 0;
$b = 1;
$n = 10;

echo "First 10 Fibonacci numbers: ";
for ($i = 0; $i < $n; $i++) {
echo $a . " ";
if ($a % 2 == 0) {
$evenNumbers[] = $a;
}
$temp = $a;
$a = $b;
$b = $temp + $b;
}

echo "\nEven numbers: ";
foreach ($evenNumbers as $even) {
echo $even . " ";
}
?>