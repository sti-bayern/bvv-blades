# Input

## Einzel-Element
    
    <x-bvvblades-forms-input name="<name>" id="<id>" type="<type>" placeholder="<placeholder>" />

### Attribute

| Name        | Type   | mögliche Werte                                        |          |                       |
| ----------- | ------ | ----------------------------------------------------- | -------- | --------------------- |
| id          | string |                                                       |          | id-Attribute          |
| name        | string |                                                       |          | id-Attribute          |
| type        | string | text, date, hidden, email, number, password, url, tel | optional | type-Attribute        |
| placeholder | string |                                                       | optional | placeholder-Attribute |

### Beispiel

    <x-bvvblades-forms-input 
        name="streng_geheim" 
        id="streng_geheim" 
        type="password" 
        placeholder="Das geheime Passwort eingeben" />

## Input-Gruppe

Es können auch Input-Felder in Kompbination mit Beschriftung und ggf. Helfertexte oder Fehlermeldungen erzeugt werden
    
    <x-bvvblades-forms-input-group 
        id="<id>" 
        name="<name>" 
        type="<type>" 
        label="<label>" 
        placeholder="<placeholder>"
    >
        <x-slot:helper>Helfer-Text</x-slot>
        <x-slot:error>Fehler-Text</x-slot>
    </x-bvvblades-forms-input-group>

### Attribute

| Name        | Type   | mögliche Werte                                        |          |                           |
| ----------- | ------ | ----------------------------------------------------- | -------- | ------------------------- |
| id          | string |                                                       |          | id-Attribute              |
| name        | string |                                                       |          | id-Attribute              |
| type        | string | text, date, hidden, email, number, password, url, tel | optional | type-Attribute            |
| placeholder | string |                                                       | optional | placeholder-Attribute     |
| label       | string |                                                       |          | Inhalt des Label-Elements |

### Slots

| Name   |                                                       |
| ------ | ----------------------------------------------------- |
| helper | Helfer-Text unterhalb des Inputfelds                  |
| error  | hervorgehobener Fehler-Text unterhalb des Inputfeldes |

### Beispiel

    <x-bvvblades-forms-input-group 
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
    </x-bvvblades-forms-input-group>


[zur Übersicht](../../README.md)