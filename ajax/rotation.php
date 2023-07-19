<?php
$label = [
    'NO LUCK ...',
    'Discount 3%' ,
    'Balance $50' ,
    'SORRY ...' ,
    'Balance $0.5',
    'Balance $5',
    'Balance $25',
    'Discount 15%',
    'Balance $10',
    'Discount 25%',
    'NO LUCK ...',
    'Balance 100',
    'Discount 50%',
    'Discount 7%',
    'Discount 5%'
];


$tile = [
    70,
    30,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0
];

$out = getRandomWeightedElement($tile);

$data = [
    'location' => $out + 1,
    'label' => $label[$out]
];

echo json_encode($data);

function getRandomWeightedElement(array $weightedValues)
{
    $Rand = mt_Rand(1, (int) array_sum($weightedValues));

    foreach ($weightedValues as $key => $value) {
        $Rand -= $value;
        if ($Rand <= 0) {
            return $key;
        }
    }
}
