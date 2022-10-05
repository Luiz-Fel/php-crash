<?php 

$age = 4;
if ($age >= 18) {
    echo 'you are old enough to vote';
} else {
    echo 'you are not old enough to vote';
}

$date = date("H");

if ($date < 12) {
    echo 'Good morning';
    echo $date;
} else if($date < 17) {
    echo 'Good afternoon';
} else {
    echo 'Good evening';
}

$posts = ['Frist Post', 'Second Post', 'Third Post'];
if (!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No posts';
}

$frist_post = !empty($posts) ? $posts[0] : 'No Posts';
//caso só queira a condição true você pode fazer da seguinte forma
$second_post = !empty($posts) ? $posts[1] : null;
// ou também pode ser feito usando o operador de coalescência nula
$third_post = $posts[2] ?? null;

echo $frist_post;
echo $second_post;


//switch
$fav_color = 'red';

switch($fav_color) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not any of the options';
}


?>