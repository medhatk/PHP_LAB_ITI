<?php
echo "Welcome to php";
echo "<br>";

$x = 5;
$y = 'Welcome ';
$z = True;

echo gettype($x);
echo "<br>";
echo gettype($y);
echo "<br>";
echo gettype($z);
echo "<br>";

echo "Method 1 (for loop): ";
for ($i = 0; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";

echo "Method 2 (while loop): ";
$i = 0;
while ($i <= 15) {
    echo $i . " ";
    $i++;
}
echo "<br>";

define("MY_CONSTANT", "ITI");
echo MY_CONSTANT;
echo "<br>";

echo "gettype x: " . gettype($x);
echo "<br>";
echo "gettype y: " . gettype($y);
echo "<br>";
echo "gettype z: " . gettype($z);
echo "<br>";

echo "isset x: ";
var_dump(isset($x));
echo "<br>";
echo "isset y: ";
var_dump(isset($y));
echo "<br>";
echo "isset z: ";
var_dump(isset($z));
echo "<br>";

echo "empty x: ";
var_dump(empty($x));   // bool false    مش فاضي
echo "<br>";
echo "empty y: ";
var_dump(empty($y));   // bool false   فيها نص
echo "<br>";
echo "empty z: ";
var_dump(empty($z));   // bool false   True مش فاضي
echo "<br>";

$m = 30;
$n = 25;
$result = $m + $n;

if ($result > 50) {
    echo "Accepted";
} else {
    echo "Not accepted";
}
echo "<br>";

$salaryA = 1000;
$salaryB = 1200;
$salaryC = 1400;

echo "<table border='1'>";
echo "<tr>
<td>Salary of Mr. A is</td>
<td>" . $salaryA . "$</td>
</tr>";
echo "<tr>
<td>Salary of Mr. B is</td>
<td>" . $salaryB . "$</td>
</tr>";
echo "<tr>
<td>Salary of Mr. C is</td>
<td>" . $salaryC . "$</td>
</tr>";
echo "</table>";

?>