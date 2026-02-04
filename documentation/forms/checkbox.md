# Checkbox

## Einzel-Element
    
    <x-bvvblades::forms.checkbox name="<name>" id="<id>" />

### Attribute

| Name    | Type   | mögliche Werte |          |                                                           |
| ------- | ------ | -------------- | -------- | --------------------------------------------------------- |
| name    | string |                |          | name-Attribute                                            |
| id      | string |                | optional | id-Attribute, falls leer wird der name verwendet          |
| value   | string |                | optional | Value-Attribut der Checkbox, default: 1                   |
| checked | bool   |                | optional | Kriterium, ob die Checkbox angekreutz ist, default: false |

### Beispiel

    <x-bvvblades::forms.checkbox
        name="is_active"  />

## Checkbox-Gruppe

Es können auch Checkbox-Felder in Kombination mit Beschriftung und ggf. Helfertexte oder Fehlermeldungen erzeugt werden
    
    <x-bvvblades::forms.group
        element="checkbox"
        id="<id>" 
        name="<name>" 
        label="<label>" 
    >
        <x-slot:helper>Helfer-Text</x-slot>
        <x-slot:error>Fehler-Text</x-slot>
    </x-bvvblades::forms.group>

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

    <x-bvvblades::forms.group
        element="checkbox"
        name="newsletter"
        label="Newsletter abonnieren"
        :checked="true"
    >
        <x-slot:helper>
            Sie können sich jederzeit wieder abmelden.
        </x-slot>
        @error('newsletter')
            <x-slot:error>{{ $message }}</x-slot>
        @enderror
    </x-bvvblades::forms.group>


[zur Übersicht](../../README.md)
