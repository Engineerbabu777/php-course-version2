<?php

// create an exmaple for assiciative array!

$student = array(
    'name' => 'John',
    'age' => 20,
    'hobbies' => array('reading', 'playing', 'swimming'),
    'address' => array(
        'street' => '123 Main St',
        'city' => 'New York',
        'state' => 'NY'
    )
);

echo $student['name'] . '<br>';
echo $student['age'] . '<br>';
echo $student['hobbies'][0] . '<br>';
echo $student['address']['city'] . '<br>';
echo $student['address']['state'] . '<br>';




?>