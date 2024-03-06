<!-- 👉 In PHP, an array is a special variable that can hold more than one value at a time. 
👉 It's a collection of similar or different types of data elements stored together under a single variable name.
👉 Each value in an array is called an element, and each element has a unique index that identifies its position in the array -->

<!-- 👉 In PHP, there are a few ways to declare an array. The simplest is using the array() function or shorthand square bracket syntax -->

<?php 
// Using array() function
$fruits = array("Apple", "Banana", "Orange");

// Using shorthand square bracket syntax
$colors = ["Red", "Green", "Blue"];

echo $fruits[0]; // Outputs: Apple
echo $colors[2]; // Outputs: Blue

/* You can add elements to an existing array using various functions like array_push() or by directly assigning a value to a specific index */

// Using array_push() function
$fruits = ["Apple", "Banana"];
array_push($fruits, "Orange");

// Directly assigning a value
$fruits[3] = "Mango";

/* PHP provides several ways to iterate through arrays.  */

// Using foreach loop
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
// Outputs: Apple Banana Orange Mango

// Using traditional for loop
$length = count($fruits);
for ($i = 0; $i < $length; $i++) {
    echo $fruits[$i] . " ";
}
// Outputs: Apple Banana Orange Mango
 
// In PHP, an associative array is an array that uses named keys instead of numeric indices. Each key is associated with a specific value. Here's an example: 👇

$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "India"
);

// You access elements in an associative array using their corresponding keys 👇

echo $person["name"]; // Outputs: John
echo $person["age"]; // Outputs: 30
echo $person["city"]; // Outputs: India

// A multidimensional array is an array that contains one or more arrays as its elements. 👇

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo $matrix[0][1]; // Outputs: 2
echo $matrix[1][2]; // Outputs: 6
echo $matrix[2][0]; // Outputs: 7

$emp  = [
    [1,"Akhter","CTO", 100000],
    [2,"Max","Designer", 200000],
    [3,"Nemat","Developer", 50000],
];

echo $emp[0][0]; // print ist row and first value
//  echo "<pre>";
//  print_r($emp);
//  echo "</pre>";

// print all value using for loop

echo "<br>";
for($row=0; $row<3; $row++) {
    for($col=0; $col<4; $col++) {
        echo $emp[$row][$col] ." ";
    }
    echo "<br>";
}

// using forEach loop 👇
foreach($emp as $v1) {
    foreach($v1 as $v2) {
        echo $v2 ." ";
    }
    echo "<br>";
}


// multidimenstional associative array

$marks = [
    "Max" => [
        "OS" => 60,
        "C++" => 55,
        "Math" => 60
    ],
    "Akhter" => [
        "OS" => 30,
        "C++" => 45,
        "Math" => 80
    ],
    "Jhon" => [
        "OS" => 60,
        "C++" => 35,
        "Math" => 60
    ],
];

echo "<table border='2px' cellpadding='5px ' cellspacing='0' >
<tr>
<th>Student Name</th>
<th>OS</th>
<th>C++</th>
<th>Math</th>
</tr>
";
foreach($marks as $key => $v1) {
    echo "<tr>
    <td>$key</td>";
    foreach($v1 as $v2) {
       echo "<td>$v2</td>";
    }
    echo "</tr>";
}
echo "</table>";

print_r($marks);


?>
