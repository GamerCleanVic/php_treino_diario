<?php

    $arrayTeste = [
        'sobrenome' => 'Silva'
    ];
    echo $arrayTeste["name"] ?? $arrayTeste['age']
        ?? 'Teste';
?>
