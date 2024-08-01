# Accordion

Mit diesem Tag kann ein Akkordeon-Element erstellt werden, das sich ein- und ausklappen lässt. Es ist barrierefrei und responsive.

## Verwendung

Um ein Akkordeon zu erstellen, verwende den folgenden Tag:


<x-bvvblades-accordion title="Dein Titel">
    Der Inhalt des Akkordeons.
</x-bvvblades-accordion>



## Beispiel für die Anwendung der verschaltelten Akkordeons

<x-bvvblades-accordion title="Accordion Title">
    <x-bvvblades-accordion-item title="Section 1">
        Inhalt für Abschnitt 1
    </x-bvvblades-accordion-item>
    <x-bvvblades-accordion-item title="Section 2">
        Inhalt für Abschnitt 2
    </x-bvvblades-accordion-item>
    <x-bvvblades-accordion-item title="Section 3">
        Inhalt für Abschnitt 3
    </x-bvvblades-accordion-item>
</x-bvvblades-accordion>

## Attribute

| Name | Type   | mögliche Werte | Pflicht|  Beschreibung       |
| ---- | ------ | -------------- | ------ | ------------------- |
|title |string  |                | ja     | Titel des Akkordeons|
|title |string  |                | ja     | Titel des Akkordeon-Items|

[zur Übersicht](../../README.md)

