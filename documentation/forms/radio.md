# Radiobutton

## Einzel-Element
    
    <x-bvvblades-forms-radio id="<id>" name="<name>" options="<options>" value="<value>" />

### Attribute

| Name    | Type   | mögliche Werte |          |                                                  |
| ------- | ------ | -------------- | -------- | ------------------------------------------------ |
| name    | string |                |          | id-Attribute                                     |
| options | array  |                |          | Array mit den Werten der option-Elementen        |
| id      | string |                | optional | id-Attribute, falls leer wird der name verwendet |
| value   | string |                | optional | ausgewählter Wert des Select-Feldes              |

#### options-Attribut

    [
        ['value' => 1, 'label' => 'hallo'],
        ['value' => 2, 'label' => 'welt'],
        ['value' => 3, 'label' => '!!!']
    ]

### Beispiel
    
    <x-bvvblades-forms-radio 
        name="country" 
        id="country" 
        :options="[
            ['value' => 'de', 'label' => 'Deutschland'],
            ['value' => 'us', 'label' => 'USA'],
            ['value' => 'gb', 'label' => 'Großbritannien']
        ]" 
        value="de" />

## Select-Gruppe

Es können auch Radiobuttons in Kombination mit Beschriftung und ggf. Helfertexte oder Fehlermeldungen erzeugt werden
    
    <x-bvvblades-forms-group 
        element="radio"
        id="<id>" 
        name="<name>" 
        options="<options>" 
        value="<value>" 
        label="<label>" 
    >
        <x-slot:helper>Helfer-Text</x-slot>
        <x-slot:error>Fehler-Text</x-slot>
    </x-bvvblades-forms-group>

### Attribute

| Name    | Type   | mögliche Werte |          |                                                           |
| ------- | ------ | -------------- | -------- | --------------------------------------------------------- |
| name    | string |                |          | id-Attribute                                              |
| options | array  |                |          | Array mit den Werten der option-Elementen                 |
| element | string | radio          |          | Legt fest, welche Form-Element-Gruppe erzeugt werden soll |
| id      | string |                | optional | id-Attribute, falls leer wird der name verwendet          |
| value   | string |                | optional | ausgewählter Wert des Select-Feldes                       |
| label   | string |                | optional | Inhalt des Label-Elements                                 |

### Slots

| Name   |                                                       |
| ------ | ----------------------------------------------------- |
| helper | Helfer-Text unterhalb des Inputfelds                  |
| error  | hervorgehobener Fehler-Text unterhalb des Inputfeldes |

### Beispiel
    
    <x-bvvblades-forms-group 
        element="radio"
        name="country" 
        id="country" 
        :options="[
            ['value' => 'de', 'label' => 'Deutschland'],
            ['value' => 'us', 'label' => 'USA'],
            ['value' => 'gb', 'label' => 'Großbritannien']
        ]" 
        value="de" 
        label="Geburtsland">
        <x-slot:helper>
            Bitte wählen Sie ein Land aus
        </x-slot>
        @error('country')
            <x-slot:error>{{ $message }}</x-slot>
        @enderror
    </x-bvvblades-forms-group>


[zur Übersicht](../../README.md)