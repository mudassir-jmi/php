
<?php 

// $x = 10;
// if($x > 30) {
//     echo "X is Greater";
// }else {
//     echo "X is Smaller";
// }

$x = 10;
if($x > 30) echo "X is Greater";
else echo "X is Smaller";

$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status; // Output: Adult

// if , elseif, else

$studentPercentage = 75;

// Determine and print the grade
echo "Student Percentage: $studentPercentage%\n";

if ($studentPercentage >= 90) {
    echo "Grade: A\n";
} elseif ($studentPercentage >= 80) {
    echo "Grade: B\n";
} elseif ($studentPercentage >= 70) {
    echo "Grade: C\n";
} elseif ($studentPercentage >= 60) {
    echo "Grade: D\n";
} else {
    echo "Grade: F\n";
}

?>