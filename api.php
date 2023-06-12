<?php 

$games = [
    [
        'title' => 'Cs-go',
        'year' => '2012',
        'style' => 'Shooter'
    ],
    [
        'title' => 'Valorant',
        'year' => '2020',
        'style' => 'Shooter'
    ],
    [
        'title' => 'Fortnite',
        'year' => '2017',
        'style' => 'Shooter'
    ]
];

header('Content-Type: application/json');
echo json_encode($games);

?>