# Usage

## Starten der Umgebung

Zum Starten der Umgebung gibt es ein Hilfsskript im bin-Ordner:

    # erzeugen der localen Images
    bin/localDeploy -e local build
    # starten der lokalen Umgebung
    bin/localDeploy -e local start

## Config-Datei

In einer zentralen BvvBlades-Config-Datei werden alle relevanten Variablen gesetzt.

Dazu muß man diese zuerst aus dem Paket holen: 

    php artisan vendor:publish --provider="Sti\BvvBlades\BvvBladesServiceProvider" --tag="config"

Dieser Befehl fügt eine Config namens bvvblades.php hinzu.

## Navigation

Die Navigation wird in der Config-Datei bvvblades.php definiert. 

    'navigation' => [

        /* ---------------------------
            1.1 Menüeintrag, der zu einer bestimmten Laravel-Route verweist
        ---------------------- */
        // [
        //     'label' => 'Personen12',
        //     'route' => 'people.index'
        // ],

        /* ---------------------------
            1.2 Menüeintrag, der zu einer bestimmten URL verweist
        ---------------------- */
        // [
        //     'label' => 'Google',
        //     'link' => 'https://www.google.de'
        // ],

        /* ---------------------------
            2 Dropdown, mit Unterpunkten
            der Sub-Eintrag ist genauso aufgebaut, wie bei 1.1 und 1.2
            Der Dropdown-Eintrag ist nicht verlinkt und benötigt auch keinen Route- oder Link-Eintrag
        ---------------------- */
        // [
        //     'label' => 'Personen-DD',
        //     'sub' => [
        //         [
        //             'label' => 'Übersicht',
        //             'route' => 'people.index'
        //         ],
        //         [
        //             'label' => 'Google',
        //             'link' => 'https://www.google.de'
        //         ],
        //     ]
        // ]

    ]


[zur Übersicht](../README.md)
