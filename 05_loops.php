<?php 

//loops

//for loop
for ($i = 0; $i <= 10; $i++) {
    echo 'Number ' . ' ' . $i;
} 
echo '<br>';
//while loop
// o valor de i vale 10 nesse momento(a variável $i nesse caso é global)
while($i <= 15) {
    echo 'Number' . $i . '<br>';
    $i = $i + 1;
}

do {
    echo $i . '<br>';
    $i++;
} while ($i <= 20);


$posts = ['Frist Post', 'Second Post', 'Third Post'];
foreach ($posts as $index => $post) {
    echo $index . $post . '<br>';
}

$person = [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];

foreach( $person as $key => $value) {
    echo "$key - $value <br>";
}


?>