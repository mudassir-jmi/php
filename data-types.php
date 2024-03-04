
<?php 
/* 

In PHP, data types can be categorized into two main groups: primitive data types and non-primitive data types.

Primitive Data Types: 👇

Integer
Float (Floating point numbers)
String
Boolean
Null

Non-Primitive Data Types: 👇

Array
Object

Primitive Data Types:

Integer: Represents whole numbers without any decimal point.
Float: Represents numbers with a decimal point.
String: Represents a sequence of characters.
Boolean: Represents a logical value, either true or false.
Null: Represents a variable with no value or a null value.

Non-Primitive Data Types:

Array: Represents an ordered map that holds data in key-value pairs. Arrays can hold multiple values under a single name.

Object: Represents an instance of a class. Objects can have properties and methods.

*/

$name = "Thor";
echo $name ."<br>";

var_dump($name); // print data types , length as well as it's values

$integerVal = 42;
$floatVal = 3.14;
$stringVal = "Hello, world!";
$boolVal = true;
$arrayVal = array(1, 2, 3, 4, 5);
$arrayVal = [1, 2, 3, 4, 5];
class MyClass {
    public $property1;
    public $property2;
}

$objectVal = new MyClass();

var_dump($objectVal);

?>