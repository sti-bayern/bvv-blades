# Checkbox

## Einzel-Element
    
    <x-bvvblades-forms-checkbox name="<name>" id="<id>" />

### Attribute

| Name    | Type   | mögliche Werte |          |                                                           |
| ------- | ------ | -------------- | -------- | --------------------------------------------------------- |
| name    | string |                |          | name-Attribute                                            |
| id      | string |                | optional | id-Attribute, falls leer wird der name verwendet          |
| value   | string |                | optional | Value-Attribut der Checkbox, default: 1                   |
| checked | bool   |                | optional | Kriterium, ob die Checkbox angekreutz ist, default: false |

### Beispiel

    <x-bvvblades-forms-checkbox 
        name="is_activ"  />

## Checkbox-Gruppe

Es können auch Checkbox-Felder in Kombination mit Beschriftung und ggf. Helfertexte oder Fehlermeldungen erzeugt werden
    
    <x-bvvblades-forms-group 
        element="checkbox"
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
| element | string | checkbox       |          | Legt fest, welche Form-Element-Gruppe erzeugt werden soll |
| id      | string |                | optional | id-Attribute, falls leer wird der name verwendet          |
| label   | string |                | optional | Inhalt des Label-Elements                                 |
| checked | bool   |                | optional | Kriterium, ob die Checkbox angekreutz ist, default: false |

### Slots

| Name   |                                                       |
| ------ | ----------------------------------------------------- |
| helper | Helfer-Text unterhalb des Inputfelds                  |
| error  | hervorgehobener Fehler-Text unterhalb des Inputfeldes |

### Beispiel

    <x-bvvblades-forms-group 
        name="vorname" 
        label="Vorname der Person"
        value="{{ $person->vorname }}"
    >
        <x-slot:helper>
            ggf. auch weitere Vornamen angeben
        </x-slot>
        @error('vorname')
            <x-slot:error>{{ $message }}</x-slot>
        @enderror
    </x-bvvblades-forms-group>


[zur Übersicht](../../README.md)
