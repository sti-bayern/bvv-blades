# Entwicklungshinweise

## Weiterentwicklung 

Um die BVV-Blades lokal zu bearbeiten startet man die Entwicklungsumgebung mit folgendem Befehl:

    bin/localDeploy -e local --blade start

Dieser Befehl klont das Repo https://github.com/sti-bayern/bvv-blades in den Ordner packages/bvv-blades.

### CSS-/JS-Anpassungen

Die Dateien liegen im Ordner **resources/assets**
Aus diesen Dateien werden die Produktiv-Dateien im **dist**-Ordner erzeugt.

Während der Entwicklung ist es empfehlenswert, dass man im app-Container im Ordner **/var/www/packages/bvv-blade** folgenden Befehl ausführt:

    npm run watch

Dieser überwacht den Ordner auf Änderungen und aktualisiert automatisch die dist-Dateien.

### neue View-Componente

Die View-Components bestehen normalerweise aus einer PHP-Klasse und einem Blade-Template.

Die Blade-Templates liegen im Ordner **resources/views/**. Hier kann eine thematische Gruppierung mit Unterordnern erfolgen.

Die PHP-Klassen liegen im Ordner **src/View/Components**. Eine Gruppierung mit Unterordnern ist hier nicht möglich. Die Gruppierung erfolgt deshalb hier mithilfe [PascalCase-Notation](https://www.techopedia.com/de/definition/pascal-case).

Neue View-Componenten müssen ausserdem in der Datei **src/BvvBladesServiceProvider.php** registriert werden.

https://laravel.com/docs/11.x/blade#components

## Ordernstruktur

    |- config           (Konfigdatei)
    |- dist             (CSS- und JS-Datei des Packets)
    |- documentation    (Dokumetation)
    |- lang             (Sprachdateien)
    |- resources
    |  |- assets        (CSS- und JS-Dateien, Grundlage für den Dist-Ordner)
    |  |- views         (Blade-Templates)
    | src               (View-Components)


## Bereitstellung einer neuen Version

Die Entwicklung erfolgt prinzipiell im Git-Branch **develop**.
Bei einer Aktualisierung des Branches wird automatisch die Packet-Version [dev-develop](https://packagist.org/packages/sti-bayern/bvv-blades#dev-develop) aktualisiert.

In den Branch **main** können keine Änderungen gepusht werden.
Anpassungen erfolgen hier per Pull-Request auf der Github-Seite.

Es sind hier keine zwingende Approvals von anderen Personen vorgeschrieben, aber bei neuen oder geänderten Funktionen ist es ratsam, den anderen drüberschauen zu lassen.

Bei einer Aktualisierung des main-Branches wird automatisch die Packet-Version [dev-main](https://packagist.org/packages/sti-bayern/bvv-blades#dev-main) aktualisiert.

Um eine Packet-Version mit expliziter Versionsnummer zu erzeugen muss folgendermaßen vorgegangen werden:

1. in der Datei **composer.json** die nächste, gewünschte Versionnummer eintragen
2. diese Änderung in den Main-Branch bringen (Pull-Request)
3. Ein neues Release in Github erzeugen
   1. auf die Seite [Releases](https://github.com/sti-bayern/bvv-blades/releases) gehen
   2. "Draft a new Release"
   3. "Choose a tag": hier einen neuen Tag mit der entsprechenden Versionnummer erzeugen
   4. Target-Branch: main
   5. Release-Titel und Description können beliebig gesetzt werden. Hilfreich ist allerdings, wenn der Titel mit der Form v0.0.0 beginnt, z.B **v0.0.10 - Accordion, Upload** oder **v0.0.9**
4. ist das Release erstellt sollte automatisch eine neue Version des Pakets erzeugt werden: https://packagist.org/packages/sti-bayern/bvv-blades


## weiterführende Links

- [Laravel-Package-Tutorial](https://www.laravelpackage.com)
- [Flowbite-Laravel-Doku](https://flowbite.com/docs/getting-started/laravel/)

