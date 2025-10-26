<?php
function greet() {
    echo "Hello, welcome to PHP functions!<br/>";
}
greet();

echo "<br/>";


// Function with parameters
function add($a, $b) {
    echo "Sum: " . ($a + $b) . "<br/>";
}
add(10, 20);

echo "<br/>";


// Function with return value
function multiply($x, $y) {
    return $x * $y;
}
$result = multiply(5, 6);
echo "Multiplication Result: " . $result . "<br/>";

echo "<br/>";


// Function with default parameter
function welcome($name = "Guest") {
    echo "Welcome, " . $name . "!<br/>";
}
welcome("Samin");
welcome();

echo "<br/>";

// Function returning a string
function fullName($first, $last) {
    return $first . " " . $last;
}
echo "Full Name: " . fullName("Sifat", "Sarker") . "<br/>";

echo "<br/>";


// Function using conditional logic
function grade($score) {
    if ($score >= 80) return "A+";
    elseif ($score >= 70) return "A";
    elseif ($score >= 60) return "B";
    else return "Fail";
}
echo "Your grade is: " . grade(85) . "<br/>";
echo "Your grade is: " . grade(55) . "<br/>";

echo "<br/>";


// Function with array parameter
function printArray($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . "<br/>";
    }
}
$numbers = [10, 20, 30, 40];
printArray($numbers);

echo "<br/>";


// Function calling another function
function outer() {
    echo "Inside outer function<br/>";
    inner();
}
function inner() {
    echo "Inside inner function<br/>";
}
outer();
?>
