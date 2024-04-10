<?php

return [
    'navigation' => [
        [
            'label' => 'Personen12',
            'route' => 'people.index'
        ],
        [
            'label' => 'Google',
            'link' => 'https://www.google.de'
            // 'route' => 'people.index'
        ],
        [
            'label' => 'Personen-DD',
            'route' => 'people.index',
            'sub' => [
                [
                    'label' => 'Übersicht',
                    'route' => 'people.index'
                ],
                [
                    'label' => 'Google',
                    'link' => 'https://www.google.de'
                ],
            ]
        ]
        // [
        //     'label'  => 'Personen',
        //     'link'   => route('people.index'),
        //     'active' => (strpos(Route::currentRouteName(), 'people') === 0)
        //         ? true
        //         : false,
        //     'sub'       => [
        //         [
        //             'label'  => 'Übersicht',
        //             'link'   => route('people.index'),
        //             'active' => (strpos(Route::currentRouteName(), 'people') === 0) ? true : false
        //         ],
        //         [
        //             'label'  => 'Amtsbezeichnungen',
        //             'link'   => route('amtsbezeichnungen.index'),
        //             'active' => (strpos(Route::currentRouteName(), 'amtsbezeichnungen') === 0) ? true : false
        //         ],
        //     ]
        // ],
        // [
        //     'label'  => 'Dienststellen',
        //     'active' => (strpos(Route::currentRouteName(), 'organisations') === 0)
        //         ? true
        //         : false,
        //     'sub'       => [
        //         [
        //             'label'  => 'Übersicht',
        //             'link'   => route('organisations.index'),
        //             'active' => (strpos(Route::currentRouteName(), 'organisations') === 0) ? true : false
        //         ],
        //         [
        //             'label'  => 'Gebäude',
        //             'link'   => route('buildings.index'),
        //             'active' => (strpos(Route::currentRouteName(), 'buildings') === 0) ? true : false
        //         ],
        //         [
        //             'label'  => 'Organisationeinheiten',
        //             'link'   => route('units.index'),
        //             'active' => (strpos(Route::currentRouteName(), 'units') === 0) ? true : false
        //         ]
        //     ]
        // ]
    ]
];
