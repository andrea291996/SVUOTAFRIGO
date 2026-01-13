<?php

$routes = [];

//elenco delle rotte chiamate con GET
$routes['GET'] = [
    [
        'pattern' => '/',
        'callable' => 'RicetteController:mostraRicette'
    ],
    [
        'pattern' => '/ricette',
        'callable' => 'RicetteController:mostraRicette'
    ],
    [
        'pattern' => '/ricette/risultati',
        'callable' => 'RicetteController:mostraRisultati'
    ],
    [
        'pattern' => '/accedi',
        'callable' => 'AccediController:accedi'
    ],
    [
        'pattern' => '/registrati',
        'callable' => 'RegistratiController:registrati'
    ],
    [
        'pattern' => '/esci',
        'callable' => 'EsciController:esci'
    ]
];

$routes['POST'] = [
    [
        'pattern' => '/ricette',
        'callable' => 'RicetteController:filtri_post'
    ],
    [
        'pattern' => '/accedi',
        'callable' => 'AccediController:accedi_post'
    ],
    [
        'pattern' => '/registrati',
        'callable' => 'RegistratiController:index'
    ],
    [
        'pattern' => '/esci',
        'callable' => 'EsciController:index'
    ]
];
?>