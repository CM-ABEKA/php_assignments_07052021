<h1>PHP VARIABLES</h1>
<?php
/**
 * Container to hold information to be used later on.
 * create
 * $ followed by name
 * rules start with letter or underscore and no spaces
 * must never start with a number 
 * save age for John as 20
 */

$name= 'James';
$science= '88%';
$math = '92%';
$languages = '96%';

echo "$name you scored the following";
echo "Math: $math";
echo "Science: $science";
echo "Languages: $languages";

/**
 * var_dump($science) - will show variable type 
 * arithmetic operatore:-
 * math
 * additio +
 * mul *
 * divide /
 * sub -
 * modulus %
 */

 $basicSalary = 60000;
 $paye = $basicSalary * 0.3;
 echo "<br>";
 echo $paye
 echo "<br> Net Salary:-".$basicSalary ;
?>