<?php
$array = [];

for ($i = 0; $i < 10; $i++) {
	$array[] = rand(1, 10);
}

$sum = 0;
$product = 1;
$countFive = 0;
$divisibleByThree = [];

foreach ($array as $value) {
	$sum += $value;
	$product *= $value;
	if ($value === 5) {
		$countFive++;
	} elseif ($value % 3 === 0) {
		foreach ($divisibleByThree as $number) {
			if ($number === $value) {
				continue 2;
			}
		}
		$divisibleByThree[] = $value;
	}
}

echo "Масив: " . implode(", ", $array) . "\n";
echo "Сума елементів: " . $sum . "\n";
echo "Добуток єлементів: " . $product . "\n";
echo "Число 5 зустрічається у масиві: " . $countFive . "\n";
echo "Числа які націло діляться на 3: " . implode(", ", $divisibleByThree) . "\n";