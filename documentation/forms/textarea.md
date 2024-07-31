# Checkbox

## Einzel-Element
    
    <x-bvvblades-forms-textarea name="<name>" id="<id>">Text</x-bvvblades-forms-textarea>

### Attribute

| Name        | Type   | mögliche Werte |          |                                                  |
| ----------- | ------ | -------------- | -------- | ------------------------------------------------ |
| name        | string |                |          | name-Attribute                                   |
| id          | string |                | optional | id-Attribute, falls leer wird der name verwendet |
| placeholder | string |                | optional | placeholder-Attribute                            |

### Beispiel

    <x-bvvblades-forms-textarea 
        name="beschreibung" 
        placeholder="Bitte ergänzen sie eine kurze Beschreibung">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
    </x-bvvblades-forms-textarea>

## Input-Gruppe

Es können auch Textarea-Felder in Kombination mit Beschriftung und ggf. Helfertexte oder Fehlermeldungen erzeugt werden
    
    <x-bvvblades-forms-group 
        element="textarea"
        id="<id>" 
        name="<name>" 
        label="<label>" 
        placeholder="<placeholder>"
        value="<value>"
    >
        <x-slot:helper>Helfer-Text</x-slot>
        <x-slot:error>Fehler-Text</x-slot>
        Text
    </x-bvvblades-forms-group>

### Attribute

| Name        | Type   | mögliche Werte |          |                                                                    |
| ----------- | ------ | -------------- | -------- | ------------------------------------------------------------------ |
| name        | string |                |          | id-Attribute                                                       |
| label       | string |                |          | Inhalt des Label-Elements                                          |
| value       | string |                | optional | wenn der Value-Wert nicht gesetzt ist wird der Slot-Wert verwendet |
| element     | string | textarea       |          | Legt fest, welche Form-Element-Gruppe erzeugt werden soll          |
| id          | string |                | optional | id-Attribute, falls leer wird der name verwendet                   |
| placeholder | string |                | optional | placeholder-Attribute                                              |

### Slots

| Name   |                                                       |
| ------ | ----------------------------------------------------- |
| helper | Helfer-Text unterhalb des Inputfelds                  |
| error  | hervorgehobener Fehler-Text unterhalb des Inputfeldes |

### Beispiel

    <x-bvvblades-forms-group 
        element="textarea"
        id="beschreibung" 
        label="Beschreibung"
        value="{{ $person->description }}"
    >
        <x-slot:helper>
            weitere Informationen zur Person
        </x-slot>
        @error('vorname')
            <x-slot:error>{{ $message }}</x-slot>
        @enderror
    </x-bvvblades-forms-group>


[zur Übersicht](../../README.md)