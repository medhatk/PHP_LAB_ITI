<?php

$str = "hello track iti track";
function reverseString($str) {
    return strrev($str);
}

function countWord($str, $word) {
    return substr_count($str, $word);
}

function charInfo($str, $char) {

    $count = substr_count($str, $char);

    $positions = [];

    for($i = 0; $i < strlen($str); $i++) {

        if($str[$i] == $char) {
            $positions[] = $i;
        }
    }

    return [
        "count" => $count,
        "positions" => $positions
    ];
}

echo reverseString($str);
echo "<br>";

echo countWord($str, "track");
echo "<br>";

print_r(charInfo($str, "a"));


$arr = [22,25,28,15,27,19,13,10,0,2,1];

function sortArray($arr) {
    sort($arr);
    return $arr;
}

function reverseArray($arr) {
    return array_reverse($arr);
}

function maxNumber($arr) {
    return max($arr);
}

function minNumber($arr) {
    return min($arr);
}

function sumAverage($arr) {

    $sum = array_sum($arr);

    $avg = $sum / count($arr);

    return [
        "sum" => $sum,
        "average" => $avg
    ];
}

function maxEven($arr) {  

    $even = [];

    foreach($arr as $value) {

        if($value % 2 == 0) {
            $even[] = $value;
        }
    }

    return max($even);
}

function maxOdd($arr) {

    $odd = [];

    foreach($arr as $value) {

        if($value % 2 != 0) {
            $odd[] = $value;
        }
    }

    return max($odd);
}

print_r(sortArray($arr));
echo "<br>";

print_r(reverseArray($arr));
echo "<br>";

echo maxNumber($arr);
echo "<br>";

echo minNumber($arr);
echo "<br>";

print_r(sumAverage($arr));
echo "<br>";

echo maxEven($arr);
echo "<br>";

echo maxOdd($arr);


$names = ["mohammed","ahmed","mahmoud","yousef","omar"];

function getNames($n) {
    return $n;
}

// sort
function sortNames($names) {
    sort($names);
    return $names;
}

// reverse
function reverseNames($names) {
    return array_reverse($names);
}

// table
echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
      </tr>";

foreach($names as $index => $name) {

    echo "<tr>
            <td>$index</td>
            <td>$name</td>
          </tr>";
}

echo "</table>";



$data = [
    [
        "name"=>"hazem",
        "age"=>24,
        "address"=>"cairo"
    ],
    [
        "name"=>"david",
        "age"=>22,
        "address"=>"menia"
    ],
    [
        "name"=>"mahmoud",
        "age"=>25,
        "address"=>"shebin"
    ],
];

function sortData($data) {

    usort($data, function($a, $b){
        return $a['age'] <=> $b['age'];
    });

    return $data;
}

function reverseData($data) {
    return array_reverse($data);
}

echo "<table border='1'>";

echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
      </tr>";

foreach($data as $index => $person) {

    echo "<tr>
            <td>$index</td>
            <td>{$person['name']}</td>
            <td>{$person['age']}</td>
            <td>{$person['address']}</td>
          </tr>";
}

echo "</table>";

?>

<form method="POST">

    <input type="text" name="name" placeholder="Enter name">

    <input type="number" name="age" placeholder="Enter age">

    <input type="text" name="address" placeholder="Enter address">

    <button type="submit">Send</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    echo "<table border='1'>";

    echo "<tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
          </tr>";

    echo "<tr>
            <td>$name</td>
            <td>$age</td>
            <td>$address</td>
          </tr>";

    echo "</table>";
}

?>