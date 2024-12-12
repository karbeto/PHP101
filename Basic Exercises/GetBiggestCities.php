<?php
function getBiggestCities($data)
{
    $biggest = [];

    foreach($data as $country => $cities) {
        $maxPop = 0;
        $maxCity = '';
        foreach($cities as $city => $population) {
            if($population > $maxPop) {
                $maxPop = $population;
                $maxCity = $city;
            }
        }
        $biggest[$country] = ['city' => $maxCity, 'population' => $maxPop];
    }

    return $biggest;
}

$data = [
    'Germany' => [
        'Munich' => 1472000,
        'Berlin' => 3645000,
        'Hamburg' => 1841000,
        'Frankfurt' => 753056
    ],
    'Italy' => [
        'Rome' => 2873000,
        'Milan' => 1352000,
        'Neapol' => 3085000,
        'Genoa' => 583601,
    ],
    'France' => [
        'Lyon' => 1733581,
        'Lille' => 1068051,
        'Paris' => 1733581
    ]
];

$biggestCities = getBiggestCities($data);

echo '<pre>';
print_r($biggestCities);
