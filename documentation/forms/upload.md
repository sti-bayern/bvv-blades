# Checkbox

## Einzel-Element
    
    <x-bvvblades-forms-upload name="<name>" id="<id>" />

### Attribute

| Name | Type   | mögliche Werte |          |                                                  |
| ---- | ------ | -------------- | -------- | ------------------------------------------------ |
| id   | string |                | optional | id-Attribute, falls leer wird der name verwendet |
| name | string |                |          | name-Attribute                                   |

### Beispiel

    <x-bvvblades-forms-input 
        name="file_upload" 
        id="file_upload" />

## Input-Gruppe

Es können auch Input-Felder in Kombination mit Beschriftung und ggf. Helfertexte oder Fehlermeldungen erzeugt werden
    
    <x-bvvblades-forms-group 
        element="upload"
        id="<id>" 
        name="<name>" 
        label="<label>" 
    >
        <x-slot:helper>Helfer-Text</x-slot>
        <x-slot:error>Fehler-Text</x-slot>
    </x-bvvblades-forms-group>

### Attribute

| Name    | Type   | mögliche Werte |          |                                                           |
| ------- | ------ | -------------- | -------- | --------------------------------------------------------- |
| name    | string |                |          | id-Attribute                                              |
| label   | string |                |          | Inhalt des Label-Elements                                 |
| element | string | input          |          | Legt fest, welche Form-Element-Gruppe erzeugt werden soll |
| id      | string |                | optional | id-Attribute, falls leer wird der name verwendet          |

### Slots

| Name   |                                                       |
| ------ | ----------------------------------------------------- |
| helper | Helfer-Text unterhalb des Inputfelds                  |
| error  | hervorgehobener Fehler-Text unterhalb des Inputfeldes |

### Beispiel

    <x-bvvblades-forms-group 
        element="upload"
        name="avatar" 
        label="Profil-Bild"
    >
        <x-slot:helper>
            muss nicht biometrisch sein
        </x-slot>
        @error('vorname')
            <x-slot:error>{{ $message }}</x-slot>
        @enderror
    </x-bvvblades-forms-group>


[zur Übersicht](../../README.md)
