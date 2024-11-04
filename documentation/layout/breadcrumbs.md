
# Breadcrumbs

Um die Brotkrumen anzupassen muss dem Template die Variable **$breadcrumbs** übergeben werden.
Diese muss folgendermaßen aufgebaut werden

    $breadcrumbs = [
        'links' => [
            'Menüpunkt 1' => "/menuepunkt_1"
            'Menüpunkt 2' => "/menuepunkt_1/menuepunkt_2"
        ]
        'active' => 'aktiver Menüpunkt'
    ]

Dies erzeugt folgende Brotkrumen:

Startseite > [Menüpunkt 1](/menuepunkt_1) > [Menüpunkt 2](/menuepunkt_1/menuepunkt_2) > **aktiver Menüpunkt**




[zur Übersicht](../../README.md)
