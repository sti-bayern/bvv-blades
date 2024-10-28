# Accordion

Mit diesem Tag kann ein Akkordeon-Element erstellt werden, das sich ein- und ausklappen lässt. Es ist barrierefrei und responsive.

Der Titel ist dabei standardmäßig eine h3-Überschrift, s. Attribute

        <!-- Usage Example -->

        <x-bvvblades-accordion title="Dein Titel">
            Der Inhalt des fsdgdfg.
        </x-bvvblades-accordion>
        <x-bvvblades-accordion title="Dein Titel">
            Der Inhalt des fsdgdfg.
        </x-bvvblades-accordion>

## Attribute

| Name  | Type    | mögliche Werte      |          | Beschreibung                              |
| ----- | ------- | ------------------- | -------- | ----------------------------------------- |
| title | string  |                     | Pflicht  | Titel des Akkordeons                      |
| level | integer | 2, 3, 4             | optional | Überschriften-Level des Titels            |
| align | string  | left, center, right | optional | Ausrichtung des Titels (Standard: center) |


[zur Übersicht](../../README.md)
