
<?php
function sayHello() {
    echo "Hello PHP Users!";
}
sayHello(); // call the function
$myMessage = sayHello();
echo $myMessage;

// function with parameter

function findAdd($num1, $num2) {
   return $num1 + $num2;
}

echo findAdd(20,50); // print this way and you can hold in other variable also 
$Add = findAdd(20,50);
echo $Add;

// variable Function 

function sayWelcome($name) {
    echo "Welcome! $name";
}

$func = "sayWelcome";
$func("Jhon"); // call variable Function

// Recursive Function

function display($num) {
  if($num <= 5) {
  echo "$num <br>";
  display($num + 1); // call again
  } 
}

display(1);  // call

// find factorial using recursive function

function findFact($n) {
  if($n == 0) {
    return 1;
  }else {
    return ($n * findFact($n - 1));
  }
}

echo findFact(3);

?>
