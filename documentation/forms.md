# Formulare

Standardmäßig wird das Formular als zweispaltiges Grid ausgegeben. Dieses Verhalten kann man über die Attribute ändern.

    <x-bvvblades-forms-form 
        method='{method}' action="{action}" 
        [no-grid]>
        ...
    </x-bvvblades-forms-form>

## Attribute

| Name    | Type   | mögliche Werte                |               |                                                                         |
| ------- | ------ | ----------------------------- | ------------- | ----------------------------------------------------------------------- |
| type    | string | get, post, patch, put, delete | Standard: get | legt die Methode fest, mit der das Formular verschickt wird             |
| action  | string |                               |               | gibt an, an welche Adresse das Formular verschickt wird                 |
| no-grid | empty  |                               |               | ist dieses Attribut gesetzt wird das Formular nicht als Grid ausgegeben |

## Beispiel

    <x-bvvblades-forms-form 
        method='patch' 
        :action="route('organisations.update', ['organisation' => $item->id])"
        no-grid>
        ...
    </x-bvvblades-forms-form>


[zur Übersicht](../README.md)  