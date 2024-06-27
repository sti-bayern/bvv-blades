# Getting Started

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


[zur Übersicht](../README.md)