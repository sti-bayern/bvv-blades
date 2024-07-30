
# Seiten-Wrapper

Damit das HTML-Gerüst aus den Paket übernommen wird, muss man in dem gewünschten Template einfach folgende Laravel-Componente einbauen:

    <x-bvvblades-layout-base>
        hier kommt der Seiteninhalt hin
    </x-bvvblades-layout-base>

Das fügt das komplette HTML-Gerüst ein, inkl. Head, Body, Navigation usw.

Der Komponente können folgende Attribute hinzugefügt werden:

## Attribute

| Name        | Type   | mögliche Werte |          |                                        |
| ----------- | ------ | -------------- | -------- | -------------------------------------- |
| title       | string |                | optional | legt die Seitenüberschrift fest        |
| breadcrumbs | array  |                | optional | erzeugt die Brotkrumen-Leiste          |

### Brotkrumen 

Die Elemente der Brotkrumen werden durch ein Array festgelegt:

    'breadcrumbs' => [
        'links'  => [
            <Label der Brotkrume> => <Link zur Seite, z.B. route('xyz')>,
        ],
        'active' => <Label der aktiven Brotkrume>
    ]

## Beispiel

    <x-bvvblades-layout-base 
        title="Dienststellen-Übersicht" 
        :breadcrumbs="[
            'links'  => [
                $organisation->name => route('organisations.show', $organisation->id)
            ],
            'active' => 'Bearbeiten'
        ]">
        ...
    </x-bvvblades-layout-base>


[zur Übersicht](../../README.md)