<?php
$numbers = [25, 21, 20, 22, 85, 14, 10, 2, 1, 5, 16, 8, 20, 11];

$totalSwaps = 0;

while (true) {
    $swaps = 0;

    for ($i = 0; $i < count($numbers) - 1; $i++) {
        if ($numbers[$i] > $numbers[$i + 1]) {
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$i + 1];
            $numbers[$i + 1] = $temp;

            $swaps++;
            $totalSwaps++;
        }
    }

    if ($swaps == 0) {
        break;
    }
}

echo "<pre>";
print_r($numbers);
echo "Total swaps: " . $totalSwaps;

