<?php 

// arrays
// array simples
$numbers = [1,2,3];
// ou 
$numbers2 = array(1,2,3);
//ou em array associativo
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

$hex = [
    'red' => '#ff0000',
    'blue' => '#0000ff',
    'greeen' => '#00ff00'
];
echo  $hex['red'];

$person = [
    'frist_name' => 'John',
    'Last_name' => 'Doe',
    'email' => 'johndoe@gmai.com'
];

$people = [
    [
        'frist_name' => 'John',
        'Last_name' => 'Doe',
        'email' => 'johndoe@gmai.com'
    ],
    [
        'frist_name' => 'John',
        'Last_name' => 'Doe',
        'email' => 'johndoe@gmai.com'
    ]
    
];
echo $people[1]['email'];

var_dump(json_encode($people));
?>