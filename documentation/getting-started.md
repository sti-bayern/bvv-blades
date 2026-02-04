# Getting Started

## Installation

    composer require sti-bayern/bvv-blades

## Assets & Styling

Das Paket verwendet Tailwind CSS. Um die Stile des Pakets in Ihre Anwendung zu integrieren, folgen Sie diesen Schritten:

### 1. Tailwind Preset veröffentlichen

Veröffentlichen Sie das Tailwind-Preset:

    php artisan vendor:publish --provider="Sti\BvvBlades\BvvBladesServiceProvider" --tag=tailwind

Dies erstellt eine `tailwind-preset.js` in Ihrem Projekt-Stammverzeichnis.

### 2. Tailwind Konfiguration anpassen

Binden Sie das Preset in Ihrer `tailwind.config.js` ein:

```javascript
import preset from './tailwind-preset';

export default {
    presets: [
        preset
    ],
    content: [
        // Ihre anderen Content-Pfade...
        './vendor/sti-bayern/bvv-blades/resources/views/**/*.blade.php',
    ],
    // ...
}
```

### 3. CSS/JS Einbindung

Da das Paket keine festen `@vite` Direktiven mehr in den Layouts vorschreibt, müssen Sie sicherstellen, dass Ihre eigenen Assets im Head-Bereich geladen werden. Sie können dazu den `head`-Slot der Layout-Komponente nutzen:

```html
<x-bvvblades::layouts.base title="Meine Seite">
    <x-slot:head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </x-slot:head>

    <!-- Content -->
</x-bvvblades::layouts.base>
```

[zur Übersicht](../README.md)
