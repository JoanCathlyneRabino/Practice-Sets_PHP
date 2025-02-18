<?php
// Practice Set 1
function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}


function modifyString(string $string): string {
    return strtolower($string);
}

function checkEvenOrOdd(int $number): string {
    return ($number % 2 === 0) ? "The number $number is even." : "The number $number is odd.";
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

$string = "This is a poorly written program with little structure and readability.";
echo "\nModified string: " . modifyString($string);

$number = 42;
echo "\n" . checkEvenOrOdd($number);

?>