# Fieldset

    <x-bvvblades-forms-fieldset
        type='{type}' span="{span}" legend="<legend>">
        ...
    </x-bvvblades-forms-fieldset>

## Attribute

| Name   | Type    | mögliche Werte |                             |                                                |
| ------ | ------- | -------------- | --------------------------- | ---------------------------------------------- |
| type   | string  | default, blank | optional, Standard: default | Steuert Hintergrund und Border                 |
| span   | integer | 2              | optional, Standard: 0       | gibt an, über wieviele Spalten der Kasten geht |
| legend | string  |                | optional                    | definiert die Überschrift des Elements         |

## Beispiel

    <x-bvvblades-forms-fieldset
        type='blank' 
        span="2" 
        legend="Fieldset-Titel">
        ...
    </x-bvvblades-forms-fieldset>


[zur Übersicht](../../README.md)