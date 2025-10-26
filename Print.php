<?php
echo "This is printed using echo<br>";
echo "Echo can take", " multiple", " parameters<br>";

print "This is printed using print<br>";
$result = print("Print returns 1, so this line will execute<br>");
echo "Result of print statement: " . $result . "<br>";

$language = "PHP";
$version = 8;
print "Language: $language<br>";
print "Version: $version<br>";

$sum = 10 + 5;
print "The sum of 10 and 5 is $sum<br>";

$name = "Sifat Samin";
print "Welcome, $name!<br>";

$greeting = print("This line executes before the next echo<br>");
echo "Value of greeting variable (returned from print): $greeting<br>";
?>
