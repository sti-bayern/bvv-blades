# Getting Started

## Installation

    composer require sti-bayern/bvv-blades

## Anpassungen

Damit die BVV-Blades korrekt angezeigt werden müssen, folgende Dateien angepasst werden:

- resources/css/app.css
- resources/js/app.js
- tailwind.config.js

Es gibt zwei Möglichkeiten, diese Anpassungen durchzuführen:

### manuelle Anpassung

**resources/css/app.css** folgende Zeile ergänzen

    @import '../../vendor/sti-bayern/bvv-blades/dist/assets/css/app.css';

**resources/css/app.css** folgende Zeilen ergänzen

    import '../css/app.css'
    import '../../vendor/sti-bayern/bvv-blades/dist/assets/js/app.js';

**tailwind.config.js** diese Datei entsprechend der [Vorlage](../templates/tailwind.config.js) anpassen.

### php artisan publish

Mit folgendem Befehl werden die css- und js-Dateien überschrieben und angepasst:

    php artisan vendor:publish --provider="Sti\BvvBlades\BvvBladesServiceProvider" --tag=assets --force

Mit folgendem Befehl die Tailwind-Config-Datei überschrieben und angepasst:

    php artisan vendor:publish --provider="Sti\BvvBlades\BvvBladesServiceProvider" --tag=tailwind --force


[zur Übersicht](../README.md)
