<?php
echo "Hello, World"

$x = 1;
$y = 2;
$sum = $x + $y;
echo $sum;

$name = "Alex";
$age = 26;
echo "Hello, $name.You are $age years old.\n";
$x = 195793;
$y = 256836;
$sum = $x + $y;

echo "The sum of $x and $y is $sum.";

$odd_numbers = [1,3,5,7,9];
$first_odd_number = $odd_numbers[0];
$second_odd_number = $odd_numbers[1];

echo "The first odd number is $first_odd_number\n";
echo "The second odd number is $second_odd_number\n";
//add to array
$odd_numbers = [1,3,5,7,9];
$odd_numbers[5] = 11;
print_r($odd_numbers);
//remove from array
$odd_numbers = [1,3,5,7,9];
unset($odd_numbers[2]); // will remove the 3rd item (5) from the list
print_r($odd_numbers);
//count number of members in array
$odd_numbers = [1,3,5,7,9];
echo count($odd_numbers);
//reset gets first member of array
$odd_numbers = [1,3,5,7,9];
$first_item = reset($odd_numbers);
echo $first_item;
//first member by index
$odd_numbers = [1,3,5,7,9];
$first_item = $odd_numbers[0];
echo $first_item;
//last member of array
$odd_numbers = [1,3,5,7,9];
$last_item = end($odd_numbers);
echo $last_item;
$odd_numbers = [1,3,5,7,9];
$last_index = count($odd_numbers) - 1;
$last_item = $odd_numbers[$last_index];
echo $last_item
//add to end of array
$numbers = [1,2,3];
array_push($numbers, 4);
print_r($numbers)
//remove from end of array
$numbers = [1,2,3,4];
array_pop($numbers);
print_r($numbers)
//to add to beginning of array
$numbers = [1,2,3];
array_unshift($numbers, 0);
print_r($numbers);
//to remove from beginning of array
$numbers = [0,1,2,3];
array_shift($numbers);
print_r($numbers);
//two arrays
$odd_numbers = [1,3,5,7,9];
$even_numbers = [2,4,6,8,10];
$all_numbers = array_merge($odd_numbers, $even_numbers);
print_r($all_numbers);
//sorting arrays
$numbers = [4,2,3,1,5];
sort($numbers);//rsort will sort in reverse
print_r($numbers);
//returns a piece of an array
$numbers = [1,2,3,4,5,6];
print_r(array_slice($numbers, 3));
//if u add another argument you can limit length
print_r(array_slice($numbers, 3, 2))
//array slice will also do this 
$numbers = [1,2,3,4,5,6];
print_r(array_splice($numbers, 3, 2));
print_r($numbers);
?>
