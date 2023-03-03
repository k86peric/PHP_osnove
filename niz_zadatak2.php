<?php

$users = [
    [
        'ime' => 'Pero',
        'prezime' => 'Peric',
        'godine' => 20,
        'spol' => 'muško'
    ],
    [
        'ime' => 'Mara',
        'prezime' => 'Maric',
        'godine' => 22,
        'spol' => 'žensko'
    ]
    ];

var_dump($users);

unset($users[0]['spol']);
unset($users[1]['spol']);

$users[] = [
    'ime' => 'Đuro',
    'prezime' => 'Đurić',
    'godine' => 20
];

echo("\n");
var_dump($users);