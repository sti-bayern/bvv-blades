# Checkbox

## Einzel-Element
    
    <x-bvvblades-forms-checkbox name="<name>" id="<id>" />

### Attribute

| Name        | Type   | mögliche Werte                                        |          |                                                  |
| ----------- | ------ | ----------------------------------------------------- | -------- | ------------------------------------------------ |
| id          | string |                                                       | optional | id-Attribute, falls leer wird der name verwendet |
| name        | string |                                                       |          | name-Attribute                                   |
| type        | string | text, date, hidden, email, number, password, url, tel | optional | type-Attribute                                   |
| placeholder | string |                                                       | optional | placeholder-Attribute                            |

### Beispiel

    <x-bvvblades-forms-input 
        name="streng_geheim" 
        id="streng_geheim" 
        type="password" 
        placeholder="Das geheime Passwort eingeben" />

## Input-Gruppe

Es können auch Input-Felder in Kombination mit Beschriftung und ggf. Helfertexte oder Fehlermeldungen erzeugt werden
    
    <x-bvvblades-forms-group 
        element="input"
        id="<id>" 
        name="<name>" 
        type="<type>" 
        label="<label>" 
        placeholder="<placeholder>"
    >
        <x-slot:helper>Helfer-Text</x-slot>
        <x-slot:error>Fehler-Text</x-slot>
    </x-bvvblades-forms-group>

### Attribute

| Name        | Type   | mögliche Werte                                        |          |                                                           |
| ----------- | ------ | ----------------------------------------------------- | -------- | --------------------------------------------------------- |
| name        | string |                                                       |          | id-Attribute                                              |
| label       | string |                                                       |          | Inhalt des Label-Elements                                 |
| element     | string | input                                                 |          | Legt fest, welche Form-Element-Gruppe erzeugt werden soll |
| id          | string |                                                       | optional | id-Attribute, falls leer wird der name verwendet          |
| type        | string | text, date, hidden, email, number, password, url, tel | optional | type-Attribute                                            |
| placeholder | string |                                                       | optional | placeholder-Attribute                                     |

### Slots

| Name   |                                                       |
| ------ | ----------------------------------------------------- |
| helper | Helfer-Text unterhalb des Inputfelds                  |
| error  | hervorgehobener Fehler-Text unterhalb des Inputfeldes |

### Beispiel

    <x-bvvblades-forms-group 
        element="input"
        id="vorname" 
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