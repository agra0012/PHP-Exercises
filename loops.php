<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
$i = 1;

while ($i <= 10)
	{
	echo $i . "<br />";
	$i++;
	}

// task separator
echo "<hr style=\"margin 1rem 0\">";


/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step)
to create array of numbers 5 to 100 with the step 5
(example: 5, 10, 15, ...)

Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even?
Divide it by 2, and if there is a remainder, the number is odd.
Use modulus operator (outputs the remainder after division),
for example:
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

$number_array = range(5, 100, 5);

$number_count = sizeof($number_array);
$i = 0;

for ($i = 0; $i < $number_count; $i++)
	{
	if ($number_array[$i] % 2 === 1) {
		echo $number_array[$i] . "<br />";
		}
	}

// task separator
echo "<hr style=\"margin 1rem 0\">";


/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food
(at least 4 array elements). Name the array food.
*/
$food = [
	"Bhindi",
	"Bharta",
	"Maggi",
	"Laddu"
];
/*
Use while-loop to print array elements (every food in a new row).
*/
$food_array_count = sizeof($food);
$i = 0;

while ($i < $food_array_count)
	{
	echo $food[$i] . "<br />";
	$i++;
	};

echo "<br />";

/*
Use for-loop to print array elements (every food in a new row).
*/

for ($i = 0; $i < $food_array_count; $i++)
	{
	echo $food[$i] . "<br />";
	};

echo "<br />";

/*
Use foreach-loop to print array elements (every food in a new row).
*/

foreach($food as $food_items)
	{
	echo $food_items . "<br />";
	};


// task separator
echo "<hr style=\"margin 1rem 0\">";


/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
echo "<ul>";

foreach($food as $food_items) {
	echo "<li>" . $food_items . "</li>";
	};

echo "</ul>";

// task separator

echo "<hr style=\"margin 1rem 0\">";


/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array.
The meal courses are broken down based on the type (salad, main course, dessert, ...)
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
"pizza" => [
"type" => "main course",
"origin" => "Italy"
],
"cheesesake" => [
"type" => "desert",
"origin" => "Greece"
]
]

So, food_assoc is an associative array.
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself
and carries the information about the type and origin.
*/

$food_assoc = [
	$food[0] => [
		"Type" => "MainCcourse",
		"Country" => "India"
	],
	$food[1] => [
		"Type" => "Main Course",
		"Country" => "India"
	],
	$food[2] => [
		"Type" => "Snack",
		"Country" => "India"
	],
	$food[3] => [
		"Type" => "Dessert",
		"Country" => "India"
	]
];

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array)
and print the type and origin as nested list items (see the example below).
*/

foreach($food_assoc as $k => $v)
	{
	echo "<ul><li>" . $k . "</li><ul>";
	$label_setter = 0;
	foreach($v as $v => $b)
		{
		if ($label_setter == 0)
			{
			echo "<li>Type: " . $b . "</li>";
			$label_setter++;
			}
		  else
			{
			echo "<li>Origin: " . $b . "</li>";
			}
		}

	echo "</ul></ul>";
	}

?>
