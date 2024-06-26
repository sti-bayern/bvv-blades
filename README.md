# BVV-Theme

## Voraussetzung

### Flowbite

Für die manche Funktionen (Drowdown, ...) wird auf das Paket [https://flowbite.com/](https://flowbite.com/) zurückgegriffen. 

    npm install -D tailwindcss postcss autoprefixer flowbite

Die tailwind.config.js wird dann aktualiesiert:

    content: [
        ...
        './node_modules/flowbite/**/*.js',
        './vendor/sti-bayern/bvv-blades/**/*.blade.php',
        ...
    ],
    ...
    plugins: [
        ...
        require('flowbite/plugin')
    ],

Anschliessend wird die Flowbite-js noch in die resources/js/app.js eingbunden:

    import 'flowbite';


## Installation

    composer require sti-bayern/bvv-blades

## Usage

### Config-Datei

In einer zentralen BvvBlades-Config-Datei werden alle relevanten Variablen gesetzt.

Dazu muß man diese zuerst aus dem Paket holen: 

    php artisan vendor:publish --provider="Sti\BvvBlades\BvvBladesServiceProvider" --tag="config"

Dieser Befehl fügt eine Config namens bvvblades.php hinzu.

## Komponenten

### Navigation

Die Navigation wird in der Config-Datei definiert. Eine entsprechende Beschreibung findet man in den Kommentaren.

### Seiten-Wrapper

Damit das HTML-Gerüst aus den Paket übernommen wird, muss man in dem gewünschten Template einfach folgende Laravel-Componente einbauen:

    <x-bvvblades-layout-base>
        hier kommt der Seiteninhalt hin
    </x-bvvblades-layout-base>

Das fügt das komplette HTML-Gerüst ein, inkl. Head, Body, Navigation usw.

Der Komponente können folgende Attribute hinzugefügt werden:

#### title: 

Diese legt die Seitenüberschrift fest

<!-- 
#### breadcrumb

Damit wird die Brotkrumen-Zeile festgelegt 
-->


#### Formulare

##### Fieldset

    <x-bvvblades-forms-fieldset>
        ....
    </x-bvvblades-forms-fieldset>

###### Attribute

| Name   | Type    | mögliche Werte |                             |                                                |
| ------ | ------- | -------------- | --------------------------- | ---------------------------------------------- |
| type   | string  | default, blank | optional, Standard: default | Steuert Hintergrund und Border                 |
| span   | integer | 2              | optional, Standard: 0       | gibt an, über wieviele Spalten der Kasten geht |
| legend | string  |                | optional                    | definiert die Überschrift des Elements         |





## weiterführende Links

- [Laravel-Package-Tutorial](https://www.laravelpackage.com)
- [Flowbite-Laravel-Doku](https://flowbite.com/docs/getting-started/laravel/)