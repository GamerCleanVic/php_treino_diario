<?php
    $userOne = [
        'name' => 'Jhon',
        'age' => 20
    ];

    $userTwo = [
        'name' => 'Jhon',
        'age' => '20'
    ];

    if($userOne === $userTwo){
        var_dump($userOne === $userTwo);
        echo "<hr />E verdadeiro!";
    }else{
        var_dump($userOne === $userTwo);
        echo "<hr />E falso!";
    }
?>
