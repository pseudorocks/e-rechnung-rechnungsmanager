# Rechnungsmanager

Ein einfaches und effizientes PHP-basiertes Tool zur Erstellung, Verwaltung und Speicherung von Rechnungen. Dieses Programm wurde speziell für kleine Unternehmen, Selbstständige und Freiberufler entwickelt, um professionelle Rechnungen schnell und unkompliziert zu erstellen.

## Funktionen

### Kernfunktionen
- **Rechnungen erstellen**: Über ein benutzerfreundliches Formular lassen sich Rechnungen in wenigen Schritten erstellen.
- **PDF- und JSON-Export**:
  - Rechnungen werden im PDF-Format gespeichert – ideal zum Versenden an Kunden.
  - Zusätzlich werden Rechnungen im JSON-Format erstellt, was für die E-Rechnungspflicht ab 2025 erforderlich ist.
- **Dashboard**:
  - Übersicht aller erstellten Rechnungen, inkl. Kundendaten, Rechnungsdatum und Gesamtbetrag.
  - Suche nach Rechnungsnummern oder Kundennamen.
  - Anzeige monatlicher Zwischensummen aller Rechnungen.
- **Dateiverwaltung**: Rechnungen können direkt aus dem Dashboard gelöscht werden.
- **Eigenständig und leicht zu bedienen**: Keine zusätzlichen Abhängigkeiten oder komplizierte Einrichtung erforderlich.

### Zukünftige Funktionen
- **E-Mail-Versand**: Rechnungen direkt an Kunden per E-Mail senden.
- **Benutzerverwaltung**: Unterscheidung zwischen Admin- und Benutzerrechten.
- **Mehrsprachigkeit**: Unterstützung für weitere Sprachen.

## Voraussetzungen

- **PHP**: Version 7.4 oder höher.
- **Webserver**: Apache, Nginx oder ein anderer Webserver, der PHP unterstützt.
- **Schreibrechte**:
  - Das Verzeichnis `output/invoices/` für PDF-Dateien.
  - Das Verzeichnis `output/e-invoices/` für JSON-Dateien.

## Installation

1. Klone das Repository:
   ```bash
   git clone https://github.com/your-username/rechnungsmanager.git
   ```
2. Verschiebe das Projektverzeichnis in das Stammverzeichnis deines Webservers (z. B. `/var/www/html`).
3. Stelle sicher, dass die Ordner im Verzeichnis `output/` beschreibbar sind:
   ```bash
   chmod -R 755 output/
   ```
4. Öffne das Projekt in deinem Browser:

   Beispiel:
   ```
   http://localhost/rechnungsmanager
   ```

## Nutzung

1. Öffne die Startseite, um eine neue Rechnung zu erstellen.
2. Im **Dashboard** kannst du:
   - Alle erstellten Rechnungen ansehen.
   - Rechnungen als PDF oder JSON herunterladen.
   - Nicht mehr benötigte Rechnungen löschen.
3. Über den Button "Neue Rechnung erstellen" kannst du jederzeit eine weitere Rechnung hinzufügen.

## Screenshots

### Rechnungsformular
![Screenshot des Rechnungsformulars](https://via.placeholder.com/600x400.png?text=Rechnungsformular)

### Dashboard
![Screenshot des Dashboards](https://via.placeholder.com/600x400.png?text=Dashboard)

## Warum dieses Tool?

Mit der ab 2025 in Deutschland geltenden E-Rechnungspflicht erfüllt dieses Tool die wichtigsten Anforderungen:
- Speicherung von Rechnungsdaten im JSON-Format.
- Einfache Bedienung ohne zusätzliche Software.
- Erweiterbar für zukünftige Anforderungen wie E-Mail-Versand und Benutzerverwaltung.

## Mitwirken

Möchtest du dieses Projekt verbessern? So kannst du mithelfen:
1. Forke das Repository.
2. Erstelle einen neuen Branch:
   ```bash
   git checkout -b feature-name
   ```
3. Führe deine Änderungen durch und committe sie:
   ```bash
   git commit -m "Neue Funktion hinzugefügt"
   ```
4. Push deinen Branch:
   ```bash
   git push origin feature-name
   ```
5. Öffne einen Pull Request.

## Lizenz

Dieses Projekt ist unter der [MIT-Lizenz](LICENSE) lizenziert.

## Unterstützung

Dir gefällt dieses Projekt? Unterstütze die Weiterentwicklung, indem du mir einen Kaffee spendierst:  
[![Buy Me a Coffee](https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png)](https://buymeacoffee.com/barbarahohensee)

